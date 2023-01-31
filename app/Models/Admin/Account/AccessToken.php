<?php

namespace App\Models\Admin\Account;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessToken extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'user_id',
        'token',
        'expire_at',
        'password',
        'ip',
        'device',
        'status'
    ];

    protected $attributes = ['status' => 1];

}
