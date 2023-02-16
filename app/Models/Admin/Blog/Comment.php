<?php

namespace App\Models\Admin\Blog;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'user_id',
        'article_id',
        'number',
        'text',
        'star',
        'replay_id',
        'status'
    ];

    protected $attributes = ['status' => 1]; // 1 is active

}
