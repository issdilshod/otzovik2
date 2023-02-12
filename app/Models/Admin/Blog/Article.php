<?php

namespace App\Models\Admin\Blog;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'user_id',
        'cover',
        'title',
        'text',
        'slug',
        'status'
    ];

    protected $attributes = ['status' => 1]; // 1 is active

}
