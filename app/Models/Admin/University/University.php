<?php

namespace App\Models\Admin\University;

use App\Models\Admin\Review\Review;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class University extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'user_id',
        'name',
        'index',
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
        'traning_period',
        'extra',
        'status'
    ];

    protected $attributes = ['status' => 1]; // 1 is active

    public function reviews()
    {
        return $this->hasMany(Review::class, 'university_id', 'id')
                    ->where('status', Config::get('status.active'));
    }

}
