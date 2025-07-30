<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestigadorTokens extends Model
{
    use HasFactory;

    protected $table = 'investigador_orcid_tokens';

    protected $fillable = [
        'investigador',
        'token',
        'refresh_token',
        'expires_at',
    ];

    protected $hidden = [
        'investigador',
        'refresh_token',
        'expires_at',
    ];
}
