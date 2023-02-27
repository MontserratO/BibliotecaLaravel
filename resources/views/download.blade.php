<!doctype html>
<html lang="en">

<head>
    <title>Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        table {
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <h5 class=" font-weight-bold">Registros de todos los prestamos registrados</h5>
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Clave de ALumnos</th>
                    <th>Clave de Profesores</th>
                    <th>Titulo del libro</th>
                    <th>Fecha de inicio</th>
                    <th>Fecha de Finalizacion</th>
                    <th>Numero de renovaciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($prestamos as $prestamo)
                <tr>
                    <td>{{ $prestamo->id }}</td>
                    <td>{{ $prestamo->ClaveUsuarioA }}</td>
                    <td>{{ $prestamo->ClaveUsuarioP }}</td>
                    <td>{{ $prestamo->nombreLibro() }}</td>
                    <td>{{ $prestamo->FechaInicio }}</td>
                    <td>{{ $prestamo->FechaFinal }}</td>
                    <td>{{ $prestamo->NomRenov }}</td>
                </tr>
                @empty

                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
