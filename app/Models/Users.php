<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Users extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    protected $primarykey = 'id';
    protected $guard = 'role';
    protected $table = 'users';
    protected $fillable = ['nama', 'email', 'password', 'role'];
}
