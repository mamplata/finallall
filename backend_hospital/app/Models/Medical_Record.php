<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medical_Record extends Model
{
    use HasFactory;
    protected $table = 'medicalrecords';
    protected $fillable = ['patient_id', 'doctor_id', 'visit_date', 'diagnosis', 'treatment', 'notes'];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
}
