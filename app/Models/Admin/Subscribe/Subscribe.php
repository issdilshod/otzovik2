<?php

namespace App\Models\Admin\Subscribe;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip',
        'name',
        'email',
        'page',
        'status'
    ];

    protected $attributes = ['status' => 1]; // 1 is active
}
