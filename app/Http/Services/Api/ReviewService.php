<?php

namespace App\Http\Services\Api;

use App\Http\Services\Service;
use App\Models\Api\Review;
use Illuminate\Http\Request;

class ReviewService extends Service{

    public function create($review)
    {
        $review = Review::create($review);

        // TODO: notification (email)

        return $review;
    }

    public function validate(Request $request)
    {
        $validated = $request->validate([
            'university_id' => '',
            'text' => '',
            'star' => '',
        ]);

        return $validated;
    }

}