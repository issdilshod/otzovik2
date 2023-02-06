<?php

namespace App\Http\Services\Admin\University;

use App\Http\Services\Admin\Misc\StringService;
use App\Http\Services\Service;
use App\Models\Admin\University\University;
use App\Models\Admin\University\UniversityDirection;
use App\Models\Admin\University\UniversityEducationType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class UniversityService extends Service{

    private $universityDirectionService;
    private $universityEducationTypeService;

    public function __construct()
    {
        $this->universityDirectionService = new UniversityDirectionService();
        $this->universityEducationTypeService = new UniversityEducationTypeService();
    }

    public function findCount()
    {
        $count = University::where('status', '!=', Config::get('status.delete'))
                    ->count();
        return $count;
    }
    
    public function findAll($name = '', $address = '', $direction = '', $educationType = '')
    {
        $universities = University::orderBy('name')
                            ->where('status', '!=', Config::get('status.delete'))
                            ->when($name!='', function ($q) use($name){
                                $q->where('name', 'like', $name . '%');
                            })
                            ->paginate(Config::get('pagination.per_page'));
        return $universities;
    }

    public function find($id)
    {
        $university = University::where('id', $id)
                        ->where('status', '!=', Config::get('status.delete'))
                        ->first();
        if ($university==null){
            return false;
        }

        // directions
        $university['directions'] = UniversityDirection::where('status', '!=', Config::get('status.delete'))
                                        ->where('university_id', $id)
                                        ->get();
        // educations type
        $university['education_types'] = UniversityEducationType::where('status', '!=', Config::get('status.delete'))
                                            ->where('university_id', $id)
                                            ->get();

        return $university;
    }

    public function top($count = 10)
    {
        $universities = University::where('status', Config::get('status.active'))
                            ->limit($count)
                            ->get();
        return $universities;
    }

    public function popular($count = 4)
    {
        // TODO: Sort by more reviews
        $universities = University::where('status', Config::get('status.active'))
                            ->limit($count)
                            ->get();
        return $universities;
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

        // Get directions
        $tmpDirections = [];
        if (isset($university['directions'])){
            $tmpDirections = $university['directions'];
        }

        // Get education types
        $tmpEducationTypes = [];
        if (isset($university['education_types'])){
            $tmpEducationTypes = $university['education_types'];
        }

        // CREATE
        $university = University::create($university);

        // directions
        foreach($tmpDirections as $key => $value):
            $this->universityDirectionService->store($university->id, $value);
        endforeach;

        // education types
        foreach($tmpEducationTypes as $key => $value):
            $this->universityEducationTypeService->store($university->id, $value);
        endforeach;

        return $university;
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

        // Get directions
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

        // Get education types
        $tmpEducationTypes = [];
        if (isset($university['education_types'])){
            $tmpEducationTypes = $university['education_types'];
            unset($university['education_types']);
        }

        // education types
        $this->universityEducationTypeService->delete_by_university($id);
        foreach($tmpEducationTypes as $key => $value):
            $this->universityEducationTypeService->store($id, $value);
        endforeach;

        // UPDATE
        $university = University::where('id', $id)
                        ->where('status', '!=', Config::get('status.delete'))
                        ->update($university);
        return $university;
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
            'traning_period' => '',
            'directions' => 'array',
            'education_types' => 'array',
            'current_user_id' => ''
        ]);

        return $validated;
    }
}