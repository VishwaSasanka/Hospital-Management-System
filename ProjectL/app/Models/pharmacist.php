<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pharmacist extends Model
{
    use HasFactory;
    protected $fillable = [
        'Pharmacist_ID', 'Pharmacist_Name','Pharmacist_email','Phone_no'
    ];
}
