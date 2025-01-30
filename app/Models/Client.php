<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_name',
        'client_email',
        'client_address',
        'client_contact_no',
        'client_kind_attd',
        'client_gstin_no',
    ];
}
