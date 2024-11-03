<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthSis extends Model
{
    use HasFactory;

    protected $fillable = [
        "FirstName",
        "LastName",
        "Username",
        "NoHP",
        "Status",
        "Note",
        "Umur",
        "TanggalLahir",
        "password",
        "Email",
        "Image"
    ];
}
