<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Vessel;
use App\Models\Ticket;

class Seat extends Model
{
    use HasFactory;

    protected $fillable = [
        'vessel_id', 'seat_number', 'deck', 'type'
    ];

    public function vessel() {
        return $this->belongsTo(Vessel::class);
    }

    public function tickets() {
        return $this->hasMany(Ticket::class);
    }
}
