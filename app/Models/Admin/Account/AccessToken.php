<?php

namespace App\Models\Admin\Account;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessToken extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'password',
        'email',
        'phone',
        'role',
        'status'
    ];

    protected $attributes = ['status' => 1];

}
