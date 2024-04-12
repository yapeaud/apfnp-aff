<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Administrateurs extends Authenticatable
{
    use HasFactory;
    protected $table = 'administrateurs';
    protected $password = 'mot_de_passe';
}
