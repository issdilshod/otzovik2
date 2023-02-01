<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class AuthenticateCustom
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // check session
        if (!$request->session()->has('user_id')){
            // check cookie
            if ($request->hasCookie('token')){
                // detect user
                $tmpToken = $request->cookie('token');
                $userId = DB::table('access_tokens as uat')
                            ->join('users as u', 'u.id', '=', 'uat.user_id')
                            ->select(['u.id'])
                            ->where('uat.token', $tmpToken)
                            ->where('uat.expire_at', '>', Carbon::now())
                            ->where('uat.status', '!=', Config::get('status.delete'))
                            ->orderBy('uat.updated_at', 'DESC')
                            ->first();
                if ($userId==null){
                    return redirect('admin/')->with('msg', 'not authenticated')->withCookie(Cookie::forget('token'));
                }
                $request->merge(['current_user_id' => $userId]);
                $request->session()->put('user_id', $userId);
            }else{
                return redirect('admin/')->with('msg', 'not authenticated');
            }
        }

        $request->merge(['current_user_id' => $request->session()->get('user_id')[0]]);

        return $next($request);
    }
}
