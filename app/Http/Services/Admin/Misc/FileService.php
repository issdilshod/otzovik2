<?php

namespace App\Http\Services\Admin\Misc;

use App\Http\Services\Service;
use Illuminate\Http\Request;

class FileService extends Service{

    /**
     * Upload file to storage & returns file name
     * 
     * @param   Request $request
     * @param   string $fileName
     * @return  string
     */
    public function upload(Request $request, $fileName, $attr = 'logo')
    {
        if ($request->hasFile($attr)){
            $tmpFile = $request->file($attr);

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