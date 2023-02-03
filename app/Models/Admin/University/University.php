<?php

namespace App\Models\Admin\University;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'user_id',
        'name',
        'worlds_rate',
        'russian_rate',
        'accreditation',
        'address',
        'phones',
        'email',
        'website',
        'facebook_link',
        'twitter_link',
        'telegram_link',
        'viber_link',
        'vk_link',
        'description',
        'logo',
        'slug',
        'status'
    ];

    protected $attributes = ['status' => 1]; // 1 is active

}
