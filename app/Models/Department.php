<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public const STATUS = [
        1 => 'Active',
        0 => 'Inactive',
    ];
}
