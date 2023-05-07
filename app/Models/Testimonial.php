<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Testimonial extends Model
{
    use HasFactory;
    protected $fillable = [
        'rate',
        'description',
        'customer_id'
    ];

    public static function createRule(): array
    {
        return [
            'rate' => 'required|numeric',
            'description' => 'required|string',
            'customer_id' => 'required|integer|exists:customers,id'
        ];
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }
}
