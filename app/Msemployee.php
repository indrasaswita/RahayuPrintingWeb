<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Msemployee extends Model
{
    protected $fillable = ['employeeName', 'phone', 'point', 'sessionID', 'lastLogin', 'role', 'cardNumber', 'cardUID'];
    protected $guarded = ['employeeID', 'password'];
    protected $table = 'msemployee';
}
