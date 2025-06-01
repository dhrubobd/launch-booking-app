<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Vessel;
use App\Models\Route;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
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
            'route_id' => Route::inRandomOrder()->first()->id,
            'departure_time' => now()->addDays(fake()->numberBetween(1, 30)),
            'arrival_time' => now()->addDays(fake()->numberBetween(1, 30))->addHours(2),
            'status' => 'scheduled',
        ];
    }
}
