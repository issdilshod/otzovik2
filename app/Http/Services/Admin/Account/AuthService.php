<?php

namespace App\Http\Services\Admin\Account;

use App\Http\Services\Service;
use Carbon\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class AuthService extends Service{

    public function login($entity)
    {
        $user = DB::table('users')
                    ->select('*')
                    ->where('username', $entity['username'])
                    ->where('password', $entity['password'])
                    ->where('status', '!=', Config::get('status.delete'))
                    ->first();

        if ($user!=null)
        {
            // set session & cookie if need
            Session::push('user_id', $user->id);

            // remeber
            if (isset($entity['remember'])){
                $tmpToken = Str::random(Config::get('session.token_length'));
                $expireAt = Carbon::now()->addDays(Config::get('session.token_life'));

                DB::table('access_tokens')
                    ->insert([
                        'user_id' => $user->id,
                        'token' => $tmpToken,
                        'expire_at' => $expireAt
                    ]);

                // set cookie
                Cookie::queue('token', env('APP_URL'), $expireAt->diffInMinutes(Carbon::now()));
            }

            return $user;
        }

        return false;
    }

}