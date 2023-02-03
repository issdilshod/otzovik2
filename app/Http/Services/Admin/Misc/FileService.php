<?php

namespace App\Http\Services\Admin\Misc;

use App\Http\Services\Service;
use Illuminate\Http\Request;

class FileService extends Service{

    public function upload(Request $request, $fileName)
    {
        if ($request->hasFile('logo')){
            $tmpFile = $request->file('logo');

            $tmpPath = StringService::slug($fileName) . '.' . $tmpFile->getClientOriginalExtension();
            $tmpFile->move('storage', $tmpPath);

            return $tmpPath;
        }
        return null;
    }

    public function multiupload(Request $request)
    {
        //
    }

}