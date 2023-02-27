<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Alumnos;
use App\Models\Profesores;
use App\Models\Libros;
use App\Models\Prestamos;
use Illuminate\Support\Facedes\DB;


class devoluciones extends Model
{
    use HasFactory;

    public function nombreAlumnoD()
    {
        $alumno = Prestamos::find($this -> ClaveDev);
        return $alumno -> ClaveUsuarioA;
    }

    public function nombreProfesorD()
    {
        $profesor = Prestamos::find($this -> ClaveDev);
        return $profesor -> ClaveUsuarioP;
    }

    public function nombreLibroD()
    {
        $libro = Prestamos::find($this -> ClaveDev);
        return $libro -> nombreLibro();
    }

    protected $table = 'devoluciones';
    protected $fillable = [
        'ClaveDev',
        'EstadoPrestamo',
        'Fecha',
        'EstadoLibro'
    ];
}
