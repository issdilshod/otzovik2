<?php

namespace App\Models\Admin\Blog;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

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

    public function likes()
    {
        return $this->hasMany(CommentLike::class, 'comment_id', 'id')
                    ->where('status', Config::get('status.active'))
                    ->where('type', Config::get('like.like'));
    }

    public function dislikes()
    {
       return $this->hasMany(CommentLike::class, 'comment_id', 'id')
                ->where('status', Config::get('status.active'))
                ->where('type', Config::get('like.dislike'));
    }

}
