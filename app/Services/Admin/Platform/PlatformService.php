<?php

namespace App\Services\Admin\Platform;

use App\Models\Admin\Platform\Platform;
use App\Services\Admin\Misc\StringService;
use App\Services\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class PlatformService extends Service{

    public function findCount()
    {
        $count = Platform::where('status', '!=', Config::get('status.delete'))
                    ->count();
        return $count;
    }

    public function findAll($name = '')
    {
        $platforms = Platform::withCount('reviews')
                            ->orderBy('name')
                            ->where('status', '!=', Config::get('status.delete'))
                            ->when($name!='', function ($q) use($name){
                                $q->where('name', 'like', $name . '%');
                            })
                            ->paginate(Config::get('pagination.per_page'));
        return $platforms;
    }

    public function find($id)
    {
        $platform = Platform::where('id', $id)
                        ->where('status', '!=', Config::get('status.delete'))
                        ->first();
        if ($platform==null){
            return false;
        }

        return $platform;
    }

    public function findAllFront($page = '', $filter = '')
    {
        $platforms = Platform::from('platforms')
                            ->withCount('reviews')
                            ->where('platforms.status', Config::get('status.active'))
                            ->when($filter=='', function($q){ // standard order by name
                                $q->orderBy('platforms.name');
                            })
                            ->when($filter!='', function($q) use($filter){ // specific filter 
                                if ($filter=='review'){ // filter by review
                                    $q->orderBy('reviews_count', 'desc');
                                }
                            })
                            ->paginate(Config::get('pagination.per_page'), ['platforms.*'], '', $page);
        return $platforms;
    }

    public function first()
    {
        $platform = Platform::withCount('reviews')
                        ->first();

        return $platform;
    }

    public function getAll()
    {
        $platforms = Platform::where('status', '!=', Config::get('status.delete'))
                            ->get(['id', 'name', 'logo']);
        return $platforms;
    }

    public function findBySlug($slug)
    {
        $platform = Platform::withCount('reviews')
                        ->where('status', Config::get('status.active'))
                        ->where('slug', $slug)
                        ->first();
        if ($platform==null){
            return false;
        }

        return $platform;
    }

    public function top($count = 10)
    {
        $platforms = Platform::withCount('reviews')
                            ->where('status', Config::get('status.active'))
                            ->limit($count)
                            ->orderBy('reviews_count', 'desc')
                            ->get();
        return $platforms;
    }

    public function popular($count = 4)
    {
        $platforms = Platform::withCount('reviews')
                            ->where('status', Config::get('status.active'))
                            ->limit($count)
                            ->orderBy('reviews_count', 'desc')
                            ->get();
        return $platforms;
    }

    public function create($platform)
    {
        // user id
        $platform['user_id'] = $platform['current_user_id'];

        // slug
        if (!isset($platform['slug']) || $platform['slug']==''){
            $platform['slug'] = StringService::slug($platform['name']);
        }

        // CREATE
        $platform = Platform::create($platform);


        return $platform;
    }

    public function update($platform, $id)
    {
        // user id
        $platform['user_id'] = $platform['current_user_id']; 
        unset($platform['current_user_id']);

        // slug
        if ($platform['slug']==''){
            $platform['slug'] = StringService::slug($platform['name']);
        }

        // logo
        if ($platform['logo']==null){
            unset($platform['logo']);
        }

        // UPDATE
        $platform = Platform::where('id', $id)
                        ->where('status', '!=', Config::get('status.delete'))
                        ->update($platform);
        return $platform;
    }

    public function delete($id)
    {
        Platform::where('id', $id)
            ->update(['status' => Config::get('status.delete')]);
        return true;
    }

    public function validate(Request $request)
    {
        $validated = $request->validate([
            // basic
            'name' => 'required',
            'city_id' => '',
            'description' => '',
            'org' => '',
            'license' => '',
            'foundation' => '',
            // contacts
            'address' => '',
            'phone' => '',
            'email' => '',
            'website' => '',
            // settings
            'slug' => '',
            'status' => '',
            'current_user_id' => ''
        ]);

        return $validated;
    }

}