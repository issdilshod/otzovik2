<?php

namespace App\Http\Services\Admin\University;

use App\Http\Resources\Admin\University\UniversityListResource;
use App\Http\Resources\Admin\University\UniversityResource;
use App\Http\Services\Admin\Misc\StringService;
use App\Http\Services\Service;
use App\Models\Admin\University\University;
use App\Models\Admin\University\UniversityDirection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class UniversityService extends Service{

    private $universityDirectionService;

    public function __construct()
    {
        $this->universityDirectionService = new UniversityDirectionService();
    }
    
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

        $university['directions'] = UniversityDirection::where('status', '!=', Config::get('status.delete'))
                                        ->get();

        return new UniversityResource($university);
    }

    public function create($university)
    {
        // user id
        $university['user_id'] = $university['current_user_id'];

        // slug
        if ($university['slug']==''){
            $university['slug'] = StringService::slug($university['name']);
        }

        // accreditation
        if (isset($university['accreditation'])){
            $university['accreditation'] = 1;
        }else{
            $university['accreditation'] = 0;
        }

        // get directions
        $tmpDirections = [];
        if (isset($university['directions'])){
            $tmpDirections = $university['directions'];
        }

        // CREATE
        $university = University::create($university);

        // directions
        foreach($tmpDirections as $key => $value):
            $this->universityDirectionService->store($university->id, $value);
        endforeach;

        return new UniversityResource($university);
    }

    public function update($university, $id)
    {
        // user id
        $university['user_id'] = $university['current_user_id']; 
        unset($university['current_user_id']);

        // slug
        if ($university['slug']==''){
            $university['slug'] = StringService::slug($university['name']);
        }

        // logo
        if ($university['logo']==null){
            unset($university['logo']);
        }

        // accreditation
        if (isset($university['accreditation'])){
            $university['accreditation'] = 1;
        }else{
            $university['accreditation'] = 0;
        }

        // get directions
        $tmpDirections = [];
        if (isset($university['directions'])){
            $tmpDirections = $university['directions'];
            unset($university['directions']);
        }

        // directions
        $this->universityDirectionService->delete_by_university($id);
        foreach($tmpDirections as $key => $value):
            $this->universityDirectionService->store($id, $value);
        endforeach;

        // UPDATE
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

    public function validate(Request $request)
    {
        $validated = $request->validate([
            // basic
            'name' => 'required',
            'worlds_rate' => 'required',
            'russian_rate' => 'required',
            'description' => 'required',
            'accreditation' => '',
            // contacts
            'address' => '',
            'phones' => '',
            'email' => '',
            'website' => '',
            'facebook_link' => '',
            'twiter_link' => '',
            'telegram_link' => '',
            'viber_link' => '',
            'vk_link' => '',
            // settings
            'slug' => '',
            'directions' => 'array',
            'current_user_id' => ''
        ]);

        return $validated;
    }
}