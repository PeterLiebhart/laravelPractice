<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'telephone', 'email_address', 'website', 'owner', 'bookable_for_events',
    ];

    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
