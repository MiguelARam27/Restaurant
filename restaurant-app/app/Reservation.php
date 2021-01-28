<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'firstName', 'lastName', 'email', 'phone_number', 'guests_total', 'time'
    ];
}