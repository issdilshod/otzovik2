<?php

namespace App\Http\Services\Api;

use App\Http\Services\Service;
use App\Models\Api\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class SubscribeService extends Service{

    public function store($subscribe)
    {
        // TODO: get ip
        

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