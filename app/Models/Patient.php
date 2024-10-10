<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Patient extends Model
{
    use HasFactory,Notifiable,HasApiTokens;
    protected $fillable = [
        'fullname',
        'marital_status',
        'picture_of_identity',
        'phone',
        'city',
        'street'
    ];
    public function examination()
    {
        return $this->hasMany('App\Models\Examination',foreignKey:'patient_id',localKey:'id');
    }
    public function blood_donation()
    {
        return $this->hasMany('App\Models\Blood_Donation',foreignKey:'patient_id',localKey:'id');
    }

    public function consultation()
    {
        return $this->hasMany('App\Models\Consultation',foreignKey:'patient_id',localKey:'id');
    }
    public function examination_that_checked_correctly()
    {
        return $this->hasMany('App\Models\Examination_That_Checked_Correctly',foreignKey:'patient_id',localKey:'id');
    }
    public function consultation_that_checked_correctly()
    {
        return $this->hasMany('App\Models\Consultation_That_Checked_Correctly',foreignKey:'patient_id',localKey:'id');
    }
}
