<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'title', 'body', 'read_at'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
