<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examination_That_Checked_Correctly extends Model
{
    use HasFactory;
    protected $fillable = [
        'examination_id',
        'doctor_id',
        'patient_id',
        'time'
    ];
    public function examination()
        {
                return $this->belongsTo('App\Models\Examination',foreignKey:'examination_id');
            }
    public function doctor()
        {
                return $this->belongsTo('App\Models\Doctor',foreignKey:'doctor_id');
            }
    public function patient()
        {
                return $this->belongsTo('App\Models\Patient',foreignKey:'patient_id');
            }
}
