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
}
