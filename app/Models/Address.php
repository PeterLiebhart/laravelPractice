<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'venue_id',
        'street_address',
        'city',
        'state',
        'postal_code',
        'country',
        'latitude',
        'longitude',
        'formatted_address',
        'google_place_id',
    ];

    public function venue(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Venue::class);
    }
}
