<?php

namespace App\Http\Controllers;

use App\Services\Account\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class UserController extends Controller
{

    private $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }
    
    public function index(Request $request)
    {
        // permission


        $data['users'] = $this->userService->findAll();
        $data['roles'] = Config::get('roles');

        return view('admin.pages.users', $data);
    }

    public function store(Request $request)
    {
        // permission


        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required',
            'password' => 'required',
            'email' => '',
            'phone' => '',
            'role' => '',
        ]);

        $this->userService->create($validated);

        return redirect('admin/pages/users', 302, ['status' => 'ok', 'msg' => 'success']);
    }

    public function get(Request $request, $id)
    {
        //

    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Request $request, $id)
    {
        //
    }

}
