<?php

namespace App\Models\Admin\Setting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'page',
        'key',
        'value',
        'lang',
        'status'
    ];

    protected $attributes = ['status' => 1]; // 1 is active
}
