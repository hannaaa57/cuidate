<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>CuidaTe</title>
</head>
<body>
    <div class="card text-center m-4" style="boder: 1px solid gray; border-radius:30px; background-color:aliceblue;">
        <br>
        <h2>¡Gracias por reportar a <b>{{ $usuario->name }}</b>!</h2>
        <p>Se ha enviado un mensaje a los contactos de emergencia pronto encontrarán a su familiar!</p><br><br>

        <h5>Se registro reporte en CuidaTe App con folio <b style="color:red;">{{ $reporte->folio }}</b></h5>
    </div>
</body>
</html>
