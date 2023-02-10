<?php

namespace App\Http\Services\Admin\Setting;

use App\Http\Services\Admin\Misc\StringService;
use App\Http\Services\Service;
use App\Models\Admin\Setting\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class CityService extends Service{

    public function findAll($name = '')
    {
        $cities = City::where('status', '!=', Config::get('status.delete'))
                        ->orderByRaw('ISNULL(sort), sort ASC')
                        ->orderBy('name')
                        ->when($name!='', function ($q) use($name){
                            return $q->where('name', 'like', $name . '%');
                        })
                        ->paginate(Config::get('pagination.per_page'));
        return $cities;
    }

    public function find($id)
    {
        $city = City::where('status', '!=', Config::get('status.delete'))
                    ->where('id', $id)
                    ->first();
        if ($city==null){
            return false;
        }

        return $city;
    }

    /**
     * Add & Update
     * 
     */
    public function save($city, $id = '')
    {
        // slug
        if ($city['slug']==''){
            $city['slug'] = StringService::slug($city['name']);
        }

        if ($id == ''){ // add
            // user
            $city['user_id'] = $city['current_user_id'];
            unset($city['current_user_id']);

            $city = City::create($city);

        }else{ // update
            // user
            unset($city['current_user_id']);

            $cityOrg = City::where('status', '!=', Config::get('status.delete'))
                        ->where('id', $id)
                        ->first();
            if ($cityOrg!=null){
                $cityOrg->update($city);
            }

            $city = $cityOrg;
        }

        return $city;
    }

    public function delete($id)
    {
        City::where('id', $id)
            ->update(['status' => Config::get('status.delete')]);
        return true;
    }

    public function validate(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'sort' => '',
            'slug' => '',
            'current_user_id' => ''
        ]);

        return $validated;
    }

}