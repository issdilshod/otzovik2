<?php

namespace App\Http\Services\Admin\University;

use App\Http\Services\Service;
use App\Models\Admin\University\UniversityDirection;
use Illuminate\Support\Facades\Config;

class UniversityDirectionService extends Service{

    public function store($universityId, $directionId)
    {
        $universityDirection = UniversityDirection::where('university_id', $universityId)
                                    ->where('direction_id', $directionId)
                                    ->first();
        if ($universityDirection!=null){
            $universityDirection->update(['status' => Config::get('status.active')]);
        }else{
            UniversityDirection::create([
                'university_id' => $universityId,
                'direction_id' => $directionId
            ]);
        }
    }

    public function delete_by_university($universityId)
    {
        UniversityDirection::where('university_id', $universityId)
            ->update(['status' => Config::get('status.delete')]);
        return true;
    }

}