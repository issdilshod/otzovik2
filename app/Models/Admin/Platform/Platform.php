<?php

namespace App\Models\Admin\Platform;

use App\Models\Admin\Review\Review;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class Platform extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'logo',
        'org',
        'license',
        'website',
        'foundation',
        'address',
        'phone',
        'email',
        'slug',
        'status'
    ];

    protected $attributes = ['status' => 1]; // 1 is active

    public function reviews()
    {
        return $this->hasMany(Review::class, 'platform_id', 'id')
                    ->where('status', Config::get('status.active'));
    }
}
