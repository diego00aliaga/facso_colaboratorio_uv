<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Documentos extends Model
{
    use HasFactory;

    protected $table = 'documentos';
    protected $fillable = [
        'tipo_documento',
        'titulo',
        'doi',
        'filename',
        'extension',
        'path',
        'licencia'
    ];
}
