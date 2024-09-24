<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Venue;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    protected $model = Address::class;

    public function definition(): array
    {
        $streetAddress = $this->faker->streetAddress;
        $city = $this->faker->city;
        $state = $this->faker->state;
        $postalCode = $this->faker->postcode;
        $country = $this->faker->country;
        $formattedAddress = "$streetAddress, $city, $state $postalCode, $country";

        return [
            'venue_id' => Venue::factory(), // Creates a Venue if not provided
            'street_address' => $streetAddress,
            'city' => $city,
            'state' => $state,
            'postal_code' => $postalCode,
            'country' => $country,
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
            'formatted_address' => $formattedAddress,
            'google_place_id' => $this->faker->uuid,
        ];
    }
}
