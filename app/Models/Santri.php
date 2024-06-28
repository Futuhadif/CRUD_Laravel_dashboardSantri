<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    protected $table = "santri";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'alamat', 'tgllhr'
    ];
}
