<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Schedule;
use App\Models\Seat;
use App\Models\User;
use App\Models\Payment;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'schedule_id', 'seat_id', 'price', 'status', 'payment_reference', 'booked_at'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function schedule() {
        return $this->belongsTo(Schedule::class);
    }

    public function seat() {
        return $this->belongsTo(Seat::class);
    }

    public function payment() {
        return $this->hasOne(Payment::class);
    }
}
