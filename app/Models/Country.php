<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'iso',
        'code',
        'image'
    ];

    public function getImageAttribute($value): string
    {
        return 'uploaded/country/image/' . $value;
    }
}
