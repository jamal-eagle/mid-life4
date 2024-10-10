<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blood_Donamtion_Admin extends Model
{
    use HasFactory;
    protected $fillable = [
        'blood_donation_id',
        'image_donation'
    ];
    public function blood_donation()
    {
        return $this->belongsTo('App\Models\Blood_Donation',foreignKey:'blood_donation_id');
    }
}
