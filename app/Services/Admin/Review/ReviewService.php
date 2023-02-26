<?php

namespace App\Services\Admin\Review;

use App\Services\Service;
use App\Models\Admin\Review\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class ReviewService extends Service{

    public function findCount()
    {
        $count = Review::where('status', '!=', Config::get('status.delete'))
                    ->count();
        return $count;
    }

    public function findAll($name = '')
    {
        $reviews = Review::from('reviews as r')
                        ->select([
                            'r.*', 
                            'u.avatar as user_avatar', 'u.first_name as user_first_name', 'u.last_name as user_last_name', 
                            'p.name as platform_name', 'p.logo as platform_logo', 'p.slug as platform_slug'])
                        ->join('users as u', 'u.id', '=', 'r.user_id')
                        ->join('platforms as p', 'p.id', '=', 'r.platform_id')
                        ->orderBy('r.created_at', 'desc')
                        ->where('r.status', '!=', Config::get('status.delete'))
                        ->paginate(Config::get('pagination.per_page'));
        return $reviews;
    }

    public function findById($id)
    {
        $review = Review::from('reviews as r')
                    ->select([
                        'r.*', 
                        'u.first_name as user_first_name', 'u.last_name as user_last_name', 'u.avatar as user_avatar',
                        'p.id as platform_id', 'p.name as platform_name', 'p.logo as platform_logo', 'p.slug as platform_slug'
                    ])
                    ->join('users as u', 'u.id', '=', 'r.user_id')
                    ->join('platforms as p', 'p.id', '=', 'r.platform_id')
                    ->where('r.status', '!=', Config::get('status.delete'))
                    ->where('r.id', $id)
                    ->first();
        if ($review!=null){
            return $review;
        }
        return false;
    }

    public function findAllFront($page = '')
    {
        $reviews = Review::from('reviews as r')
                        ->select([
                            'r.*', 
                            'u.avatar as user_avatar', 'u.first_name as user_first_name', 'u.last_name as user_last_name', 
                            'p.name as platform_name', 'p.logo as platform_logo', 'p.slug as platform_slug'
                        ])
                        ->join('users as u', 'u.id', '=', 'r.user_id')
                        ->join('platforms as p', 'p.id', '=', 'r.platform_id')
                        ->orderBy('r.created_at', 'desc')
                        ->where('r.status', Config::get('status.active'))
                        ->paginate(Config::get('pagination.per_page'), [], '', $page);
        return $reviews;
    }

    public function first()
    {
        $review = Review::from('reviews as r')
                    ->select([
                        'r.*',
                        'u.first_name as user_first_name', 'u.last_name as user_last_name', 'u.avatar as user_avatar',
                        'p.id as platform_id', 'p.name as platform_name', 'p.logo as platform_logo', 'p.slug as platform_slug'
                    ])
                    ->join('platforms as p', 'p.id', '=', 'r.platform_id')
                    ->join('users as u', 'u.id', '=', 'r.user_id')
                    ->first();
        return $review;
    }

    public function popular($count = 5)
    {
        $reviews = Review::from('reviews as r')
                        ->select([
                            'r.*',
                            'u.first_name as user_first_name', 'u.last_name as user_last_name',
                            'p.name as platform_name', 'p.slug as platform_slug'
                        ])
                        ->join('users as u', 'u.id', '=', 'r.user_id')
                        ->join('platforms as p', 'p.id', '=', 'r.platform_id')
                        ->where('r.status', Config::get('status.active'))
                        ->whereBetween('r.star', [3, 5]) // 3.0 - 5.0
                        ->inRandomOrder() // random order
                        ->limit($count)
                        ->get();
        return $reviews;
    }

    public function last($count = 5)
    {
        $reviews = Review::from('reviews as r')
                        ->select([
                            'r.*',
                            'u.first_name as user_first_name', 'u.last_name as user_last_name',
                            'p.name as platform_name', 'p.slug as platform_slug'
                        ])
                        ->join('users as u', 'u.id', '=', 'r.user_id')
                        ->join('platforms as p', 'p.id', '=', 'r.platform_id')
                        ->where('r.status', Config::get('status.active'))
                        ->orderBy('r.updated_at', 'desc')
                        ->limit($count)
                        ->get();
        return $reviews;
    }

    public function other_platform($platformId, $count = 5)
    {
        $reviews = Review::from('reviews as r')
                        ->select([
                            'r.*',
                            'u.first_name as user_first_name', 'u.last_name as user_last_name',
                            'p.name as platform_name', 'p.slug as platform_slug'
                        ])
                        ->join('users as u', 'u.id', '=', 'r.user_id')
                        ->join('platforms as p', 'p.id', '=', 'r.platform_id')
                        ->where('r.platform_id', $platformId)
                        ->where('r.status', Config::get('status.active'))
                        ->orderBy('r.updated_at', 'desc')
                        ->limit($count)
                        ->get();
        return $reviews;
    }

    public function findByNumber($reviewNumber)
    {
        $review = Review::from('reviews as r')
                    ->select([
                        'r.*',
                        'u.first_name as user_first_name', 'u.last_name as user_last_name', 'u.avatar as user_avatar',
                        'p.id as platform_id', 'p.name as platform_name', 'p.logo as platform_logo', 'p.slug as platform_slug'
                    ])
                    ->join('platforms as p', 'p.id', '=', 'r.platform_id')
                    ->join('users as u', 'u.id', '=', 'r.user_id')
                    ->where('r.number', $reviewNumber)
                    ->where('r.status', Config::get('status.active'))
                    ->first();
        if ($review==null){
            return false;
        }
        return $review;
    }

    public function findByPlatform($platformId, $page = '')
    {
        $reviews = Review::from('reviews as r')
                    ->select([
                        'r.*',
                        'u.first_name as user_first_name', 'u.last_name as user_last_name', 'u.avatar as user_avatar',
                        'p.name as platform_name', 'p.logo as platform_logo', 'p.slug as platform_slug'
                    ])
                    ->join('platforms as p', 'p.id', '=', 'r.platform_id')
                    ->join('users as u', 'u.id', '=', 'r.user_id')
                    ->where('r.platform_id', $platformId)
                    ->where('r.status', Config::get('status.active'))
                    ->orderBy('r.updated_at', 'desc')
                    ->paginate(Config::get('pagination.per_page'), [], '', $page);
        return $reviews;
    }

    public function create($review)
    {
        $review = Review::create($review);

        // TODO: notification (email)

        return $review;
    }

    public function update($review, $id)
    {
        // user id
        //$review['user_id'] = $review['current_user_id']; 
        unset($review['current_user_id']);

        // UPDATE
        $review = Review::where('id', $id)
                        ->where('status', '!=', Config::get('status.delete'))
                        ->update($review);
        return $review;
    }

    public function delete($id)
    {
        Review::where('id', $id)
            ->update(['status' => Config::get('status.delete')]);
        return true;
    }

    public function validate(Request $request)
    {
        $validated = $request->validate([
            'platform_id' => 'required',
            'text' => '',
            'star' => '',
            'current_user_id' => '',
            
            'status' => '',
        ]);

        $reviewCount = Review::get()
                            ->count();

        $validated['number'] = ((int)$reviewCount + 1);

        // star validation
        if (isset($validated['star'])){
            if ((float)$validated['star']>5){
                $validated['star'] = 5;
            }
            if ((float)$validated['star']<0){
                $validated['star'] = 0.0;
            }
        }

        return $validated;
    }

    public function staticticByPlatform($platformId)
    {
        $all = Review::where('status', Config::get('status.active'))
                    ->where('platform_id', $platformId)
                    ->count();
                
        return [];
    }

}