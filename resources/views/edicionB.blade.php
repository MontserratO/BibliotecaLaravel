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
                                Edita el registro de tu libro
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container px-4 px-lg-5 d-flex h-10 align-items-center ">
                <div class="col-md-12 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <form action="/almacenar" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$libro->id}}">
                                <p> Titulo:</p>
                                <input class="col-md-6" type="text" name="Titulo" id="" value="{{$libro->Titulo}}">
                                <p> Autor:</p>
                                <input class="col-md-6" type="text" name="Autor" id="" value="{{$libro->Autor}}">
                                <p> Editorial:</p>
                                <input class="col-md-6" type="text" name="Editorial" id="" value="{{$libro->Editorial}}">
                                <p> Categoría:</p>
                                <input class="col-md-6" type="text" name="Categoria" id="" value="{{$libro->Categoria}}">
                                <br>
                                <input class="btn btn-primary" id = "edit" type="submit" value="Editar">
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
