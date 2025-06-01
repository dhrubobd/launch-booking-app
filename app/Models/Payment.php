<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Ticket;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket_id', 'amount', 'method', 'status', 'payment_reference', 'paid_at'
    ];

    public function ticket() {
        return $this->belongsTo(Ticket::class);
    }
}
