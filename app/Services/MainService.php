<?php

namespace App\Services;

use App\Services\Admin\Account\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class MainService extends Service{

    private $authService;

    public function __construct()
    {
        $this->authService = new AuthService();
    }

    public function _mode(Request $request)
    {
        $response = null;
        // check token & mode edit
        if (isset($request->_token)){
            $_token = $this->authService->is_real_token($request->_token);
            if ($_token && isset($request->_mode) && $request->_mode==Config::get('app._mode.edit')){
                $response['user_id'] = $_token->user_id;
                $response['mode'] = Config::get('app._mode.edit');
            }
            //else{ // other mode
            //    $response['user_id'] = $_token->user_id;
            //    $response['mode'] = Config::get('app._mode.read');
            //}
        }

        return $response;
    }

}