<?php

namespace App\Services\Admin\University;

use App\Services\Service;
use App\Models\Admin\University\UniversityEducationLevel;
use Illuminate\Support\Facades\Config;

class UniversityEducationLevelService extends Service{

    public function store($universityId, $educationLevelId)
    {
        $universityEducationLevel = UniversityEducationLevel::where('university_id', $universityId)
                                        ->where('education_level_id', $educationLevelId)
                                        ->first();
        if ($universityEducationLevel!=null){
            $universityEducationLevel->update(['status' => Config::get('status.active')]);
        }else{
            UniversityEducationLevel::create([
                'university_id' => $universityId,
                'education_level_id' => $educationLevelId
            ]);
        }
    }

    public function delete_by_university($universityId)
    {
        UniversityEducationLevel::where('university_id', $universityId)
            ->update(['status' => Config::get('status.delete')]);
        return true;
    }

}