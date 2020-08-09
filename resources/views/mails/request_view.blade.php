<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Solicitud de cliente</title>
</head>
<body>
    <p>Saludos equipo <b>ATLAS</b>, un nuevo cliente a reportado una solicitud:</p>
    <ul>
        <li>Nombre: {{ $array["name"] }}</li>
        <li>E-MAIL: {{ $array["email"] }}</li>
        <li>Ciudad: {{ $array["city"] }}</li>
        <li>Teléfono: {{ $array["phone"] }}</li>
        <li>Dirección: {{ $array["address"] }}</li>
        <li>Mensaje: {{ $array["message"] }}</li>
    </ul>

    <p>Cordialmente,</p>

    <img src=" {{asset('images/img_tractor_atlas.png') }}" style="width:80px !important;">
    <p>ATLAS</p>
    
</body>
</html>