<?php

namespace App\Http\Services\Admin\Account;

use App\Http\Resources\Admin\Account\UserListResource;
use App\Http\Resources\Admin\Account\UserResource;
use App\Http\Services\Service;
use App\Models\Admin\Account\User;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class UserService extends Service{

    public function findAll($name = '')
    {
        $users = User::orderBy('first_name')
                    ->orderBy('last_name')
                    ->where('status', '!=', Config::get('status.delete'))
                    ->when($name!='', function($q1) use ($name){
                        $q1->where(function($q2) use($name){
                            $q2->where('first_name', 'like', $name . '%')
                                ->orWhere('last_name', 'like', $name . '%');
                        });
                    })
                    ->paginate(Config::get('pagination.per_page'));
        return UserListResource::collection($users);
    }

    public function find($id)
    {
        $user = User::where('id', $id)
                    ->where('status', '!=', Config::get('status.delete'))
                    ->first();
        if ($user!=null){
            return new UserResource($user);
        }
        return false;
    }

    public function create($user)
    {
        $user = User::create($user);
        return new UserResource($user);
    }

    public function update($user, $id)
    {
        $user = User::where('id', $id)
                    ->where('status', '!=', Config::get('status.delete'))
                    ->update($user);
        return new UserResource($user);
    }

    public function delete($id)
    {
        User::where('id', $id)
            ->update(['status' => Config::get('status.delete')]);
        return true;
    }

}