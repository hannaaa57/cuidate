<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reportes CuidaTe</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="card text-center">
        <div class="card-header">
          <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">
              <a class="nav-link active" href="{{ url('consultarReportes') }}">Listado de reportes CuidaTe</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Ubicación</th>
                    <th>Teléfono</th>
                    <th>Folio</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reportes as $r)
                <tr>
                    <td>{{ $r->id }}</td>
                    <td>{{ $r->usuario->name }}</td>
                    <td>{{ $r->ubicacion }}</td>
                    <td>{{ $r->telefono }}</td>
                    <td>{{ $r->folio }}</td>
                    <td>{{ $r->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
          <div class="d-flex justify-content-center">
            {{ $reportes->links() }}
          </div>
        </div>
      </div>
</body>
</html>
