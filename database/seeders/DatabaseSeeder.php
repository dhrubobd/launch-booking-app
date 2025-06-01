<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vessel;
use App\Models\Route;
use App\Models\Schedule;
use App\Models\Seat;
use App\Models\Ticket;
use App\Models\Payment;
use App\Models\Notification;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Vessel::factory()->count(5)->create();
        Route::factory()->count(5)->create();
        Schedule::factory()->count(10)->create();
        Seat::factory()->count(100)->create();
        Ticket::factory()->count(30)->create();
        Payment::factory()->count(30)->create();
        Notification::factory()->count(20)->create();

        /*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */
    }
}
