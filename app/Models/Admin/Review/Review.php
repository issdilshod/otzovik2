<?php

namespace App\Models\Admin\Review;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'user_id',
        'university_id',
        'number',
        'text',
        'star',
        'status'
    ];

    protected $attributes = ['status' => 1]; // 1 is active
}
