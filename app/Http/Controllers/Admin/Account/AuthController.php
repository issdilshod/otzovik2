<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use App\Http\Services\Admin\Account\AuthService;
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
            return redirect('/admin/dashboard')->with('status', 'error');
        }

        return view('admin.pages.login', $data);
    }

    public function login(Request $request)
    {
        $data = [];

        $this->authService->auth();

        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'remember' => ''
        ]);

        $response = $this->authService->login($validated);

        // log in
        if ($response){
            return redirect('admin/dashboard')->with('msg', 'success');
        }

        $data = $validated;
        $data['msg'] = __('login_invalid');

        // error
        return view('admin.pages.login', $data);
    }

    public function logout(Request $request)
    {
        $cookie = $this->authService->logout();

        return redirect('admin/')->with('msg', 'success')->withCookie($cookie);
    }

}
