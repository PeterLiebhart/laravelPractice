<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVenueRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            // Venue fields
            'name' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
            'email_address' => 'required|email|unique:venues,email_address',
            'website' => 'required|url|unique:venues,website',
            'owner' => 'required|string|max:255',
            'bookable_for_events' => 'required|boolean',

            // Address fields
            'address.street_address' => 'required|string',
            'address.city' => 'required|string',
            'address.state' => 'required|string|max:100',
            'address.postal_code' => 'required|string|max:20',
            'address.country' => 'required|string|max:100',
            'address.latitude' => 'required|numeric',
            'address.longitude' => 'required|numeric',
            'address.formatted_address' => 'required|string',
            'address.google_place_id' => 'required|string',

        ];
    }
}
