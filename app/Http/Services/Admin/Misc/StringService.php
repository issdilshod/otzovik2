<?php

namespace App\Http\Services\Admin\Misc;

use App\Http\Services\Service;

use Illuminate\Support\Str;

class StringService extends Service{

    static function slug($value)
    {
        return Str::slug($value);
    }

}