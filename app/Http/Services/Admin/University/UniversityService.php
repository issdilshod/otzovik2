<?php

namespace App\Http\Services\Admin\University;

use App\Http\Resources\Admin\University\UniversityListResource;
use App\Http\Resources\Admin\University\UniversityResource;
use App\Http\Services\Admin\Misc\StringService;
use App\Http\Services\Service;
use App\Models\Admin\University\University;
use Illuminate\Support\Facades\Config;

class UniversityService extends Service{
    
    public function findAll($name = '')
    {
        $universities = University::orderBy('name')
                            ->where('status', '!=', Config::get('status.delete'))
                            ->when($name!='', function ($q) use($name){
                                $q->where('name', 'like', $name . '%');
                            })
                            ->paginate(Config::get('pagination.per_page'));
        return UniversityListResource::collection($universities);
    }

    public function find($id)
    {
        $university = University::where('id', $id)
                        ->where('status', '!=', Config::get('status.delete'))
                        ->first();
        if ($university==null){
            return false;
        }
        return new UniversityResource($university);
    }

    public function create($university)
    {
        // make
        $university['user_id'] = $university['current_user_id'];
        if ($university['slug']==''){ // if empty
            $university['slug'] = StringService::slug($university['name']);
        }

        $university = University::create($university);
        return new UniversityResource($university);
    }

    public function update($university, $id)
    {
        // make
        $university['user_id'] = $university['current_user_id']; unset($university['current_user_id']);
        if ($university['slug']==''){ // if empty
            $university['slug'] = StringService::slug($university['name']);
        }

        $university = University::where('id', $id)
                        ->where('status', '!=', Config::get('status.delete'))
                        ->update($university);
        return new UniversityResource($university);
    }

    public function delete($id)
    {
        University::where('id', $id)
            ->update(['status' => Config::get('status.delete')]);
        return true;
    }
}