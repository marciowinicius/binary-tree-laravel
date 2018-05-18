<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Kalnoy\Nestedset\NodeTrait;

class User extends Authenticatable
{
    use Notifiable, NodeTrait;

    protected $fillable = ['name', 'email', 'password', 'parent_id'];

    protected $hidden = ['password'];
}