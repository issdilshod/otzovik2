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
                        ->where(function ($q) use($page){
                            $q->where(function($qq) use($page){ // by page or null (global)
                                $qq->where('page', $page)
                                    ->orWhere('page', NULL);
                            });
                        })
                        ->get();
        $settings = $this->serialize($settings);
        return $settings;
    }

    public function saveByKey($setting, $key)
    {
        Setting::where('status', Config::get('status.active'))
                ->where('key', $key)
                ->where('lang', Config::get('app.locale'))
                ->update($setting);
        return true;
    }

    private function serialize($settings)
    {
        $result = [];
        foreach($settings as $key => $value):
            $result[$value->key] = $value->value;
        endforeach;
        return $result;
    }

}