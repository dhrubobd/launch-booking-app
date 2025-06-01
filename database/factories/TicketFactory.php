<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Schedule;
use App\Models\Seat;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'schedule_id' => Schedule::inRandomOrder()->first()->id,
            'seat_id' => Seat::inRandomOrder()->first()->id,
            'price' => fake()->randomFloat(2, 10, 100),
            'status' => 'booked',
            'payment_reference' => fake()->uuid(),
            'booked_at' => now(),
        ];
    }
}
