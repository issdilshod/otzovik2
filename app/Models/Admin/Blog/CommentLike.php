<?php

namespace App\Models\Admin\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentLike extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip',
        'comment_id',
        'type',
        'status'
    ];

    protected $attributes = ['status' => 1]; // 1 is active
}
