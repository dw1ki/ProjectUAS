<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kampus extends Model
{
    use HasFactory;

    protected $primarykey = 'id';
    protected $table = 'kampus';
    protected $fillable = ['nama', 'alamat', 'latitude', 'longitude'];
}
