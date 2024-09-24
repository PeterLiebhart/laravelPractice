<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Venue;
use Illuminate\Database\Eloquent\Factories\Factory;

class VenueFactory extends Factory
{
    protected $model = Venue::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'telephone' => $this->faker->phoneNumber,
            'email_address' => $this->faker->unique()->companyEmail,
            'website' => $this->faker->unique()->url,
            'owner' => $this->faker->name,
            'bookable_for_events' => $this->faker->boolean,
        ];
    }

    public function withAddress(): VenueFactory
    {
        return $this->afterCreating(function (Venue $venue) {
            Address::factory()->create(['venue_id' => $venue->id]);
        });
    }
}
