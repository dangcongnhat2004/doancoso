<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'address',
        'phone',
        'email',
        'appointment_date',
        'appointment_time',
        'doctor_id',
        'message',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }




}
