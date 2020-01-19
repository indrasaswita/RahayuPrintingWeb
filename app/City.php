<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name','island'];
    protected $dates = ['created_at','update_at'];
    protected $guarded = ['id'];
}
