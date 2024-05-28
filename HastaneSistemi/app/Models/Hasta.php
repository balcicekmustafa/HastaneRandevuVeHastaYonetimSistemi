<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Hasta extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['ad', 'email', 'sifre', 'telefon', 'adres'];

    protected $hidden = ['sifre'];
}
