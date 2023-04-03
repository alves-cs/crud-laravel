<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacao extends Model
{
    use HasFactory;

    protected $table = 'publicacoes';
    protected $visible = [
        'titulo', 
        'texto',
        'autor',
        'created_at',
    ];
    protected $fillable = [
        'titulo', 
        'texto',
        'autor',
        'created_at',
    ];
}
