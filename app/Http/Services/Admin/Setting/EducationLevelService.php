<?php

namespace App\Http\Services\Admin\Setting;

use App\Http\Services\Admin\Misc\StringService;
use App\Http\Services\Service;
use App\Models\Admin\Setting\EducationLevel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class EducationLevelService extends Service{

    public function findAll($name = '')
    {
        $educationLevels = EducationLevel::where('status', '!=', Config::get('status.delete'))
                            ->orderByRaw('ISNULL(sort), sort ASC')
                            ->orderBy('name')
                            ->when($name!='', function ($q) use($name){
                                return $q->where('name', 'like', $name . '%');
                            })
                            ->paginate(Config::get('pagination.per_page'));
        return $educationLevels;
    }

    public function find($id)
    {
        $educationLevel = EducationLevel::where('status', '!=', Config::get('status.delete'))
                            ->where('id', $id)
                            ->first();
        if ($educationLevel==null){
            return false;
        }

        return $educationLevel;
    }

    public function getAll()
    {
        $educationLevels = EducationLevel::where('status', Config::get('status.active'))
                            ->orderByRaw('ISNULL(sort), sort ASC')
                            ->orderBy('name')
                            ->get();
        return $educationLevels;
    }

    /**
     * Add & update
     * 
     */
    public function save($educationLevel, $id = '')
    {
        // slug
        if ($educationLevel['slug']==''){
            $educationLevel['slug'] = StringService::slug($educationLevel['name']);
        }

        if ($id == ''){ // add
            // user
            $educationLevel['user_id'] = $educationLevel['current_user_id'];
            unset($educationLevel['current_user_id']);

            $educationLevel = EducationLevel::create($educationLevel);

        }else{ // update
            // user
            unset($educationLevel['current_user_id']);

            $educationLevelOrg = EducationLevel::where('status', '!=', Config::get('status.delete'))
                                    ->where('id', $id)
                                    ->first();
            if ($educationLevelOrg!=null){
                $educationLevelOrg->update($educationLevel);
            }

            $educationLevel = $educationLevelOrg;
        }

        return $educationLevel;
    }

    public function delete($id)
    {
        EducationLevel::where('id', $id)
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