<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Libros;
use App\Models\Prestamos;
use App\Models\Alumnos;
use App\Models\Profesores;
use App\Models\Devoluciones;
use PDF;

class HomeController extends Controller
{
    public function biblioteca()
    {
        $d = Libros::all();
        //dd($d);
        return view('biblioteca')
                ->with('libros', $d);
    }

    public function agregar(Request $request)
    {
        $d = new Libros();

        $d -> Titulo = $request -> Titulo;

        $file = $request -> file('archivo');
        $d -> path = $request -> file('archivo') -> storeAs('public', $file -> getClientOriginalName());
        $d -> name = $file -> getClientOriginalName();

        $d -> Autor = $request -> Autor;
        $d -> Editorial = $request -> Editorial;
        $d -> Categoria = $request -> Categoria;
        $d -> Disponibilidad = '1';
        $d -> save();

        return redirect("/biblioteca");
    }
    
    public function formulario()
    {
        return view('form');
    }

    public function eliminar2(Request $request)
    {
        $d = Libros::find($request -> libro) -> delete();

        return redirect("/biblioteca");
    }

    public function muestraedicion($id)
    {
        $d = Libros::find($id);

        return view('edicionB') -> with('libro', $d);

    }

    public function update(Request $request)
    {
        $d = Libros::find($request -> id);

        $d -> Titulo = $request -> Titulo;
        $d -> Autor = $request -> Autor;
        $d -> Editorial = $request -> Editorial;
        $d -> Categoria = $request -> Categoria;
        $d -> save();

        return redirect("/biblioteca");
    }




    

    public function prestamos()
    {
        $d = Prestamos::all();
        $a = Alumnos::all();
        $p = Profesores::all();

        return view('prestamos')
                ->with('prestamos', $d)
                ->with('alumnos', $a)
                ->with('profesores', $p);
    }

    public function downloadPDF()
    {
        $d = Prestamos::all();

        view()->share('download',$d);

        $pdf = PDF::loadView('download', ['prestamos' => $d]);

        return $pdf->download('Prestamos.pdf');
    }
    
    public function formularioP()
    {
        $d = Libros::all();
        $a = Alumnos::all();
        $p = Profesores::all();

        return view('formP')
                ->with('libros', $d)
                ->with('alumnos', $a)
                ->with('profesores', $p);
    }

    public function agregarP(Request $request)
    {
        $d = new Prestamos();
        $v = new Devoluciones();

        $d -> ClaveUsuarioA = $request -> ClaveUsuarioA;
        $d -> ClaveUsuarioP = $request -> ClaveUsuarioP;
        $d -> ClaveLib = $request -> ClaveLib;
        $l = Libros::find($d -> ClaveLib);
        $l -> Disponibilidad = '2';

        $d -> FechaInicio = $request -> FechaInicio;
        $d -> FechaFinal = $request -> FechaFinal;
        $d -> NomRenov = '0';
        $d -> save();
        $l -> save();
        $v -> ClaveDev = $d -> id;
        $v -> EstadoPrestamo = '0';
        $v -> save();

        return redirect("/prestamos");
    }

    
    public function muestrarenov($id)
    {
        $d = Prestamos::find($id);

        $d -> FechaFinal = date('Y-m-d', strtotime(' + 1 month'));
        $d -> NomRenov += '1';
        $d -> save();

        
        return redirect("/prestamos");
    }



    
    
    public function devoluciones()
    {
        $d = Devoluciones::all();
        $t = Prestamos::all();
        $a = Alumnos::all();
        $p = Profesores::all();

        return view('devoluciones')
                ->with('devoluciones', $d)
                ->with('prestamos', $t)
                ->with('alumnos', $a)
                ->with('profesores', $p);
    }

    
    public function muestradev($id)
    {
        $d = Devoluciones::find($id);

        return view('edicionD') -> with('devolucion', $d);
    }

    public function updateD(Request $request)
    {
        $d = Devoluciones::find($request -> id);
        
        $d -> EstadoPrestamo = '1';
        $d -> Fecha = date('Y/m/d');
        $d -> EstadoLibro = $request -> EstadoLibro;

        $p = Prestamos::find($d -> ClaveDev);
        $l = Libros::find($p -> ClaveLib);
        $l -> Disponibilidad = '1';

        $d -> save();
        $l -> save();

        return redirect("/devoluciones");
    }

}
