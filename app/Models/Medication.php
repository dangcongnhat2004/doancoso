<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'medication_name', 'dosage', 'schedule', 'start_date', 'end_date'];

}
