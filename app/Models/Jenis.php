<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;

    protected $primarykey = 'id';
    protected $table = 'jenis';
    protected $fillable = ['nama'];
}
