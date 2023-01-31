<?php

namespace App\Models\Admin\Account;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
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

    protected $hidden = [
        'password'
    ];
}
