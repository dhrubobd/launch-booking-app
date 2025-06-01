<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Vessel;
use App\Models\Route;
use App\Models\Ticket;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'vessel_id', 'route_id', 'departure_time', 'arrival_time', 'status'
    ];

    public function vessel() {
        return $this->belongsTo(Vessel::class);
    }

    public function route() {
        return $this->belongsTo(Route::class);
    }

    public function tickets() {
        return $this->hasMany(Ticket::class);
    }
}
