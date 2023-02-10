<?php

namespace App\Models\Admin\Setting;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationLevel extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'user_id',
        'name',
        'sort',
        'slug',
        'status'
    ];

    protected $attributes = ['status' => 1]; // 1 is active
}
