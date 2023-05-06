<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'image',
        'discount',
        'rate',
        'count'
    ];

    public function getImageAttribute($value): string
    {
        return 'uploaded/product/image/' . $value;
    }
}
