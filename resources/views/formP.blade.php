<?php
  // Obteniendo la fecha actual del sistema con PHP
  $fechaActual = date('Y-m-d');

  $fechaFinal = date('Y-m-d', strtotime(' + 1 month'));

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Esc Prim Julian Carrillo</title>
        <link rel="icon" href="https://cdn.icon-icons.com/icons2/809/PNG/512/university_cap_icon-icons.com_66109.png" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="stylesheet" href = "/css/estilo.css">

    </head>
    <body id="page-top">
        
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="/">Esc. Prim. "Julian Carrillo"</a>
            </div>
        </nav>
        
        <header class="masthead" id="masthead2">
            <div class="container px-4 px-lg-5 d-flex h-25 align-items-center ">
                <div class="col-md-12 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <h3 class="text-uppercase m-0">
                                Libro a prestar
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container px-4 px-lg-5 d-flex h-10 align-items-center ">
                <div class="col-md-12 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <form action="/agregarP" method="post">
                                @csrf
                                <p> Alumno:</p>
                                <select class="col-md-6"  name="ClaveUsuarioA" id="select_box">
                                    <option value="">Selecciona el alumno</option>
                                    @foreach ($alumnos as $alumno)
                                        <option value="{{$alumno -> id}}"> <p>{{$alumno -> Nombres}}</p> </option>
                                    @endforeach
                                </select>
                                <p> Profesor:</p>
                                <select class="col-md-6"  name="ClaveUsuarioP" id="select_box">
                                    <option value="">Selecciona el libro</option>
                                    @foreach ($profesores as $profesor)
                                        <option value="{{$profesor -> id}}"> <p>{{$profesor -> Nombres}}</p> </option>
                                    @endforeach
                                </select>
                                <p> Libro:</p>
                                <select class="col-md-6"  name="ClaveLib" id="select_box">
                                    <option value="">Selecciona el libro</option>
                                    @foreach ($libros as $libro)
                                        <option value="{{$libro -> id}}"> <p>{{$libro -> titulo}}</p> </option>
                                    @endforeach
                                </select>
                                <br>
                                <input type="hidden" name="FechaInicio" value="{{$fechaActual}}">
                                <input type="hidden" name="FechaFinal" value="{{$fechaFinal}}">
                                <input class="btn btn-primary" id = "edit" type="submit" value="Guardar">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; 2022</div></footer>
        
        <script type = "text/javascript" src="{{ asset('/js/jav.js') }}"></script>
        <script src = "/js/jav.js"></script>

        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
