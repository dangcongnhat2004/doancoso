<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthProfile extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'medical_history', 'symptoms', 'medical_records'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
