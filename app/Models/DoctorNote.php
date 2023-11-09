<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorNote extends Model
{
    use HasFactory;
    protected $fillable = ['doctor_id', 'patient_id', 'note_content'];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
