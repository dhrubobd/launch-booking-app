<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Schedule;

class Route extends Model
{
    use HasFactory;

    protected $fillable = [
        'origin', 'destination', 'duration'
    ];

    public function schedules() {
        return $this->hasMany(Schedule::class);
    }
}
