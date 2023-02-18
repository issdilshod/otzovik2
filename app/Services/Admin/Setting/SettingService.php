<?php

namespace App\Services\Admin\Setting;

use App\Models\Admin\Setting\Setting;
use App\Services\Service;
use Illuminate\Support\Facades\Config;

class SettingService extends Service{

    public function findByPage($page)
    {
        //
        $settings = Setting::where('status', Config::get('status.active'))
                        ->where('lang', Config::get('app.locale'))
                        ->where('page', $page)
                        ->get();
        return $settings;
    }

}