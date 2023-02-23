<?php

namespace App\Http\Middleware;

use App\Models\Admin\Account\AccessToken;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class AuthenticateBearer
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
        $token = $request->bearerToken();
        $accessToken = AccessToken::where('token', $token)
                                ->where('status', Config::get('status.active'))
                                ->where('expire_at', '>', Carbon::now()->toDateTimeString())
                                ->first();

        if (!$accessToken){
            return response()->json([
                'data' => ['msg' => 'Unauthentificated'],
            ], 401);
        }

        // add more life to token as in config
        $expire_at = Carbon::now();
        AccessToken::where('token', $token)
                        ->update(['expire_at' => $expire_at->addDays(Config::get('session.token_life'))->toDateTimeString()]);

        $request->merge(['current_user_id' => $accessToken->user_id]);
        return $next($request);
    }
}
