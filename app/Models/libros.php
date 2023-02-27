<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class libros extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'libros';
    protected $fillable = [
        'Titulo',
        'name',
        'Path',
        'Autor',
        'Editorial',
        'Categoria',
        'Disponibilidad'
    ];
}
