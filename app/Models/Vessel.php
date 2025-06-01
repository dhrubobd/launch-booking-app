<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Schedule;
use App\Models\Seat;

class Vessel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'code', 'seat_layout'
    ];

    public function schedules() {
        return $this->hasMany(Schedule::class);
    }

    public function seats() {
        return $this->hasMany(Seat::class);
    }
}
