<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ticket;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ticket_id' => Ticket::inRandomOrder()->first()->id,
            'amount' => fake()->randomFloat(2, 10, 100),
            'method' => fake()->randomElement(['card', 'cash', 'mobile']),
            'status' => 'paid',
            'payment_reference' => fake()->uuid(),
            'paid_at' => now(),
        ];
    }
}
