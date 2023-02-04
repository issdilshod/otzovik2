<?php

namespace App\Models\Admin\University;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniversityDirection extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'university_id',
        'direction_id',
        'status'
    ];

    protected $attributes = ['status' => 1]; // 1 is active
}
