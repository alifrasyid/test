<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menudiet extends Model
{
    use HasFactory;
    protected $fillable = [
        "Judul",
        "Subjudul",
        "Image",
        "Chef",
        "Deskripsi"
    ];
}
