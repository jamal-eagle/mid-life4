<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Examination extends Model
{
    use HasFactory,Notifiable,HasApiTokens;
    protected $fillable = [
        'patient_id',
        'report',
        'description_of_status'
    ];

    public function doctor()
    {
        return $this->hasMany('App\Models\Doctor',foreignKey:'examination_id',localKey:'id');
    }
    public function patient()
    {
        return $this->belongsTo('App\Models\Patient',foreignKey:'patient_id');
    }
    public function examination_that_checked_correctly()
    {
        return $this->hasMany('App\Models\Examination_That_Checked_Correctly',foreignKey:'examination_id',localKey:'id');
    }

}
