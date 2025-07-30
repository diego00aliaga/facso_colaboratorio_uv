<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TiposDocumento extends Model
{
    use HasFactory;

    protected $table = 'tipos_documento';
    protected $fillable = [
        'tipo',
        'is_active',
    ];

    public $timestamps = false;

}
