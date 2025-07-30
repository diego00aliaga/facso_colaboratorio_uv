<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Publicaciones extends Model
{
    use HasFactory;
    protected $table = 'publicaciones';
    protected $fillable = [
        'id_documento',
        'put-code',
        'titulo',
        'titulo_traducido',
        'idioma',
        'doi',
        'url_documento',
        'is_vinculada',
        'fecha_publicacion',
    ];

    public $timestamps = false;
}
