<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $primarykey = 'id';
    protected $table = 'area_parkir';
    protected $fillable = ['nama', 'kapasitas', 'keterangan', 'kampus_id'];
}
