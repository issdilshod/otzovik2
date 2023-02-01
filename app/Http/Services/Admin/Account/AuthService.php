<?php

namespace App\Http\Services\Admin\Account;

use App\Http\Services\Service;
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
        $user = User::where('username', $entity['username'])
                    ->where('status', '!=', Config::get('status.delete'))
                    ->first();

        if ($user!=null)
        {
            if (Hash::check($entity['password'], $user->password)){
                // set session & cookie if need
                Session::push('user_id', $user->id);

                // remeber
                if (isset($entity['remember'])){
                    $tmpToken = Str::random(Config::get('session.token_length'));
                    $expireAt = Carbon::now()->addDays(Config::get('session.token_life'));

                    AccessToken::create([
                        'user_id' => $user->id,
                        'token' => $tmpToken,
                        'expire_at' => $expireAt
                    ]);

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

}