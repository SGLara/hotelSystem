<?php

namespace Database\Factories;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;

class HotelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hotel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->name . " Hotel and Spa",
            'email' => $this->faker->unique()->safeEmail,
            'phone' => 12345678,
            'fax' => 12345678,
            'address' => $this->faker->unique()->streetAddress,
            'country_id' => 1,
            'state_id' => 1,
            'city_id' => 1,
            'logo_url' => null,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
