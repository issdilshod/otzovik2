<?php

namespace App\Services\Admin\Subscribe;

use App\Services\Admin\Misc\SystemService;
use App\Services\Service;
use App\Models\Admin\Subscribe\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class SubscribeService extends Service{

    public function store($subscribe)
    {
        $subscribe['ip'] = SystemService::get_ip();

        $exists = Subscribe::where('email', $subscribe['email'])
                    ->first();
        if ($exists!=null){
            $exists->update(['status' => Config::get('status.active')]);
        }else{
            Subscribe::create($subscribe);
        }

        return true;
    }

    public function validated(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
            'page' => 'required'
        ]);

        return $validated;
    }

}