<?php

namespace App\Http\Services\Admin\University;

use App\Http\Services\Admin\Misc\StringService;
use App\Http\Services\Service;
use App\Models\Admin\University\Direction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class DirectionService extends Service{

    public function findAll($name = '')
    {
        $directions = Direction::orderBy('name', 'asc')
                        ->when($name!='', function ($q) use($name){
                            return $q->where('name', 'like', $name . '%');
                        })
                        ->where('status', '!=', Config::get('status.delete'))
                        ->paginate(Config::get('pagination.per_page'));
        return $directions;
    }

    public function getAll()
    {
        $directions = Direction::orderBy('name', 'asc')
                        ->where('status', '!=', Config::get('status.delete'))
                        ->get();
        return $directions;
    }

    public function find($id)
    {
        $direction = Direction::where('status', '!=', Config::get('status.delete'))
                        ->where('id', $id)
                        ->first();
        return $direction;
    }

    public function create($direction)
    {
        // user id
        $direction['user_id'] = $direction['current_user_id'];

        // slug
        $direction['slug'] = StringService::slug($direction['name']);

        $direction = Direction::create($direction);
        return $direction;
    }

    public function update($direction, $id)
    {
        // user id
        $direction['user_id'] = $direction['current_user_id'];
        unset($direction['current_user_id']);

        // slug
        $direction['slug'] = StringService::slug($direction['name']);

        $direction = Direction::where('id', $id)
                        ->where('status', '!=', Config::get('status.delete'))
                        ->update($direction);
        return $direction;
    }

    public function delete($id)
    {
        Direction::where('id', $id)
            ->update(['status' => Config::get('status.delete')]);
        return true;
    }

    public function validate(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'current_user_id' => ''
        ]);

        return $validated;
    }

}