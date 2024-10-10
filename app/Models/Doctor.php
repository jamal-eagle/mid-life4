<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Doctor extends Model
{
    use HasFactory,Notifiable,HasApiTokens;
        protected $fillable = [
            'examination_id',
            'fullname',
            'phone',
            'specification',
            'consultation',
            'examonation',
        ];

        public function examination()
                {
                return $this->belongsTo('App\Models\examination',foreignKey:'examination_id');
            }

            public function address_of_doctor()
                {
                return $this->hasMany('App\Models\address_of_doctor',foreignKey:'doctor_id',localKey:'id');
            }

            public function consultation()
            {
                return $this->hasMany('App\Models\Consultation',foreignKey:'doctor_id',localKey:'id');
            }
            public function examination_that_checked_correctly()
            {
                return $this->hasMany('App\Models\Examination_That_Checked_Correctly',foreignKey:'doctor_id',localKey:'id');
            }
            public function consultation_that_checked_correctly()
            {
                return $this->hasMany('App\Models\Consultation_That_Checked_Correctly',foreignKey:'doctor_id',localKey:'id');
            }
}
