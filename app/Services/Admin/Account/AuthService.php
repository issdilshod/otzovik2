<?php

namespace App\Services\Admin\Account;

use App\Services\Service;
use App\Models\Admin\Account\AccessToken;
use App\Models\Admin\Account\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class AuthService extends Service{

    public function login($entity)
    {
        $user = User::where('email', $entity['email'])
                    ->where('status', Config::get('status.active'))
                    ->where('role', '!=', Config::get('roles.user'))
                    ->first();

        if ($user!=null)
        {
            if (Hash::check($entity['password'], $user->password)){
                // set session & cookie if need
                Session::push('user_id', $user->id);

                // remeber
                $tmpToken = Str::random(Config::get('session.token_length'));
                $expireAt = Carbon::now()->addDays(Config::get('session.token_life'));

                AccessToken::create([
                    'user_id' => $user->id,
                    'token' => $tmpToken,
                    'expire_at' => $expireAt
                ]);

                Session::push('token', $tmpToken);

                if (isset($entity['remember'])){
                    // set cookie
                    Cookie::queue('token', $tmpToken, $expireAt->diffInMinutes(Carbon::now()));
                }

                return $user;
            }
        }

        return false;
    }

    public function logout()
    {
        $cookie = 'fake';

        // remove session
        if (Session::has('user_id')){
            Session::forget('user_id');
        }

        // remove cookie if exists
        if (Cookie::has('token')){
            $tmpToken = Cookie::get('token');

            AccessToken::where('token', $tmpToken)
                ->update(['status' => Config::get('status.delete')]);
            $cookie = Cookie::forget('token');
        }

        return $cookie;
    }

    public function auth()
    {
        if (Session::has('user_id') || Cookie::has('token')){
            return true;
        }
        return false;
    }

    public function is_real_token($token)
    {
        $accessToken = AccessToken::where('token', $token)
                            ->where('status', Config::get('status.active'))
                            ->where('expire_at', '>', Carbon::now())
                            ->first();
        if ($accessToken==null){
            return false;
        }
        return $accessToken;
    }

}