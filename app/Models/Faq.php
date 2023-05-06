<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $fillable = [
        'question',
        'answer'
    ];

    public static function createRule(): array
    {
        return [
            'question' => 'required|string',
            'answer' => 'required|string'
        ];
    }
}
