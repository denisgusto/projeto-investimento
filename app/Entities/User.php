<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;

    public $timestamps = true;
    protected $table = 'users';
    protected $fillable = ['name', 'cpf', 'gender', 'birth', 'phone', 'notes', 'email', 'password'];
    protected $hidden = ['password', 'remember_token'];
}
