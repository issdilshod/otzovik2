<?php

namespace App\Services\Admin\Misc;

use App\Services\Service;

use Illuminate\Support\Str;

class StringService extends Service{

    static function slug($value)
    {
        return Str::slug($value);
    }

}