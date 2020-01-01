<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Printingsalesdetail extends Model
{
    protected $fillable =  ['printingTitle', 'printingType', 'jobType', 'previewFile', 'quantity', 'quantityType', 'inschiet', 'inschietType', 'material', 'paperSize', 'imageSize', 'sidePrint', 'totalPlat', 'description', 'note', 'hargaAsli', 'hargaMaterial', 'hargaOngkosCetak', 'deadline', 'printApproval', 'printApprovalImage', 'printApprovalSigner', 'status', 'digitalCounter', 'offsetCounter'];
    protected $guarded = ['printingSalesID'];
    protected $table = 'printingsalesdetail';
}
