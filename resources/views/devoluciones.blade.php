<?php

  $fechaActual = date('Y-m-d');
  
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

        <link rel="stylesheet" href = "/css/estil.css">

    </head>
    <body id="page-top">
        
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="/">Esc. Prim. "Julian Carrillo"</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="/biblioteca">Libros</a></li>
                        <li class="nav-item"><a class="nav-link" href="/prestamos">Prestamos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Cerrar sesion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <header class="masthead" id="masthead">
            <div class="container px-4 px-lg-5 d-flex h-25 align-items-center ">
                <div class="col-md-12 mb-3 mb-md-0 pad">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <h4 class="text-uppercase m-0">
                                Devoluciones
                                <a class="btn btn-primary"  id= "agre" href="/chart">????</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container px-4 px-lg-5 d-flex h-auto">
                    <div class="col-md-12 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                @foreach($devoluciones as $devolucion)
                                    <?php if ($devolucion->EstadoPrestamo == '0'):?>    
                                        <?php if ($devolucion->nombreAlumnoD() != NULL):?>
                                            <p>
                                                <strong>Nombre del alumno: </strong>
                                                {{$devolucion->nombreAlumnoD()}}
                                            </p>
                                        <?php endif; ?>  

                                        <?php if ($devolucion->nombreProfesorD() != NULL):?>
                                            <p>
                                                <strong>Nombre del profesor: </strong>
                                                {{$devolucion->nombreProfesorD()}}
                                            </p>
                                        <?php endif; ?>

                                        <p>
                                            <strong>Titulo del libro: </strong>
                                            {{$devolucion->nombreLibroD()}}
                                        </p>

                                        <a class="btn btn-primary" href="dev/{{$devolucion->id}}">Devolver</a>

                                        <hr class="my-4 mx-auto" />
                                    <?php endif; ?> 
                                @endforeach
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
