<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Vessel; 

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seat>
 */
class SeatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'vessel_id' => Vessel::inRandomOrder()->first()->id,
            'seat_number' => strtoupper(fake()->lexify('??') . fake()->numberBetween(1, 50)),
            'deck' => fake()->randomElement(['A', 'B', 'C']),
            'type' => fake()->randomElement(['regular', 'vip']),
        ];
    }
}
