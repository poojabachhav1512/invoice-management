<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'oc_number',
        'po_number',
        'client_id',
        'vendor_code',
        'gst_info',
    ];
}
