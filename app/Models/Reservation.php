<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name', 'date_of_reservation', 'time_of_reservation',
        'doctor_id', 'messages', 'status'
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
