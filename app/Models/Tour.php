<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'number_of_days',
        'rate',
        'description',
        'image',
        'location',
        'price',
        'discount',
        'date',
        'icon',
        'country_id',
        'travel_type_id'
    ];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    public function travel(): BelongsTo
    {
        return $this->belongsTo(TravelType::class, 'travel_type_id', 'id');
    }

    public function getImageAttribute($value): string
    {
        return 'uploaded/tour/image/' . $value;
    }

    public function getIconAttribute($value): string
    {
        return 'uploaded/tour/icon/' . $value;
    }
}
