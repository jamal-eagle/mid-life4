<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Blood_Donation extends Model
{
    use HasFactory,Notifiable,HasApiTokens;
    protected $fillable = [
        'patient_id',
        'amount',
        'blood',
        'type_of_blood'
    ];
    public function patient()
    {
        return $this->belongsTo('App\Models\Patient',foreignKey:'patient_id');
    }
    public function blood_donation_admin()
    {
        return $this->hasMany('App\Models\Blood_Donamtion_Admin',foreignKey:'blood_donation_id',localKey:'id');
    }
}
