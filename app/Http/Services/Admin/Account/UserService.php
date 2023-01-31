<?php

namespace App\Services\Admin\Account;

use App\Http\Resources\Admin\Account\UserListResource;
use App\Http\Resources\Admin\Account\UserResource;
use App\Services\Service;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class UserService extends Service{

    public function findAll($name = '')
    {
        $users = DB::table('users')
                    ->select('*')
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
        $user = DB::table('users')
                    ->select('*')
                    ->where('status', '!=', Config::get('status.delete'))
                    ->where('id', $id)
                    ->first();
        if ($user!=null){
            return new UserResource($user);
        }
        return false;
    }

    public function create($user)
    {
        $user = DB::table('users')
                    ->insert($user);
        return new UserResource($user);
    }

    public function update($user, $id)
    {
        $user = DB::table('users')
                    ->where('id', $id)
                    ->where('status', '!=', Config::get('status.delete'))
                    ->update($user);
        return new UserResource($user);
    }

    public function delete($id)
    {
        DB::table('users')
            ->where('id', $id)
            ->update(['status' => Config::get('status.delete')]);
        return true;
    }

}