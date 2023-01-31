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

        return view('admin.pages.login', $data);
    }

    public function login(Request $request)
    {
        $data = [];

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
        $this->authService->logout();

        return redirect('admin/')->with('msg', 'success');
    }

}
