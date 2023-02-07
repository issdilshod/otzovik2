<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip',
        'email',
        'page',
        'status'
    ];

    protected $attributes = ['status' => 1]; // 1 is active
}
