<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bibliotecarios extends Model
{
    use HasFactory;

    protected $table = 'bibliotecarios';
    protected $fillable = [
        'email',
        'nombre'
    ];
}
