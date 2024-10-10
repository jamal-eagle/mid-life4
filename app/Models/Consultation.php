<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Consultation extends Model
{
    use HasFactory,Notifiable,HasApiTokens;
    protected $fillable = [
        'patient_id',
        'doctor_id',
        'description'
    ];
    public function patient()
    {
        return $this->belongsTo('App\Models\Patient',foreignKey:'patient_id');
    }
    public function doctor()
    {
        return $this->belongsTo('App\Models\Doctor',foreignKey:'doctor_id');
    }
    public function consultation_that_checked_correctly()
    {
        return $this->hasMany('App\Models\Consultation_That_Checked_Correctly',foreignKey:'Consultation_id',localKey:'id');
    }

}
