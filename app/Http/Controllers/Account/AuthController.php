<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $data = [];

        $validated = $request->validate([
            'username' => '',
            'password' => ''
        ]);

        return view('admin.pages.login', $data);
    }

}
