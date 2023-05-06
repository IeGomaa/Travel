<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'email',
        'phone',
        'location',
        'position',
        'biography'
    ];

    public function getImageAttribute($value): string
    {
        return 'uploaded/employee/image/' . $value;
    }
}
