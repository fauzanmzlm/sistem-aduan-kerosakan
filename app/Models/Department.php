<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public const ACTIVE = [
        'code' => 1,
        'text' => 'active',
    ];
    public const INACTIVE = [
        'code' => 0,
        'text' => 'inactive',
    ];
}
