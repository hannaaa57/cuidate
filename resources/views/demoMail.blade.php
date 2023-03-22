<!DOCTYPE html>
<html>
<head>
    <title>CuidaTe</title>
</head>
<body>
    <h1>{{ $mailData['title'] }}</h1>

    <p>Hola {{ $mailData['contacto']['nombre'] }}, se ha reportado que localizaron a su familiar <b>{{ $mailData['usuario']['name'] }}</b></p>

    <p>La ubicación de localización es: <b>{{ $mailData['ubicacion'] }}</b></p>

    <p>Le pedimos que mantenga la calma, y se ponga en contacto con la persona que localizó a su familiar a través del teléfono: <b>{{ $mailData['telefono'] }}</b></p>

    <p>Puede dar seguimiento a su reporte en CuidaTe Web App con el folio: <b>{{ $mailData['reporte']['folio'] }}</b></p>

    <p>Atte. <br>CuidaTe Web App</p>

    <p>¡Gracias por ayudar!</p>
</body>
</html>
