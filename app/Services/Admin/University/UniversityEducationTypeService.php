<?php

namespace App\Services\Admin\University;

use App\Services\Service;
use App\Models\Admin\University\UniversityEducationType;
use Illuminate\Support\Facades\Config;

class UniversityEducationTypeService extends Service{

    public function store($universityId, $educationTypeId)
    {
        $universityEducationType = UniversityEducationType::where('university_id', $universityId)
                                        ->where('education_type_id', $educationTypeId)
                                        ->first();
        if ($universityEducationType!=null){
            $universityEducationType->update(['status' => Config::get('status.active')]);
        }else{
            UniversityEducationType::create([
                'university_id' => $universityId,
                'education_type_id' => $educationTypeId
            ]);
        }
    }

    public function delete_by_university($universityId)
    {
        UniversityEducationType::where('university_id', $universityId)
            ->update(['status' => Config::get('status.delete')]);
        return true;
    }

}