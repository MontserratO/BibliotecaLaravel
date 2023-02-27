<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Alumnos;
use App\Models\Profesores;
use App\Models\Libros;
use Illuminate\Support\Facedes\DB;

class prestamos extends Model
{
    use HasFactory;

    public function nombreAlumno()
    {
        $alumno = Alumnos::find($this -> ClaveUsuarioA);
        return $alumno -> Nombres;
    }

    public function nombreProfesor()
    {
        $profesor = Profesores::find($this -> ClaveUsuarioP);
        return $profesor -> Nombres;
    }

    public function nombreLibro()
    {
        $libro = Libros::find($this -> ClaveLib);
        return $libro -> Titulo;
    }

    protected $table = 'prestamos';
    protected $fillable = [
        'ClaveUsuario',
        'ClaveLib',
        'FechaInicio',
        'FechaFinal',
        'NomRenov',
    ];
}
