<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Printingsalesheader extends Model
{
    protected $fillable =  ['customerID', 'salesTime', 'purchaseOrderID', 'deliveryNote', 'tempo', 'status'];
    protected $guarded = ['printingSalesID'];
    protected $table = 'printingsalesheader';
}
