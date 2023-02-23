<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use App\Services\Admin\Account\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    private $authService;

    public function __construct()
    {
        $this->authService = new AuthService();
    }
    
    public function index(Request $request)
    {
        $data = [];

        if ($this->authService->auth()){
            return redirect('/admin/dashboard')->with('status', '404');
        }

        return view('admin.pages.login', $data);
    }

    public function login(Request $request)
    {
        $data = [];

        $this->authService->auth();

        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required',
            'remember' => ''
        ]);

        $response = $this->authService->login($validated);

        // log in
        if ($response){
            return redirect('admin/dashboard')->with('status', '200');
        }

        $data = $validated;
        $data['msg'] = __('login_invalid');

        // error
        return view('admin.pages.login', $data);
    }

    public function logout(Request $request)
    {
        $cookie = $this->authService->logout();

        return redirect('admin/')->with('status', '200')->withCookie($cookie);
    }

}
