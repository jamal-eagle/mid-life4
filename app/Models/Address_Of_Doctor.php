<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Address_Of_Doctor extends Model
{
    use HasFactory,Notifiable,HasApiTokens;
        protected $fillable = [
            'doctor_id',
            'street',
            'city',
            'governate',
            'district',
            'sub_district',
            'community',
        ];

        public function doctor()
            {
                return $this->belongsTo('App\Models\Doctor',foreignKey:'doctor_id');
        }
}
