<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Lugar</title>
</head>
<body>
    <h1>Detalles del Lugar</h1>
    <p><strong>Nombre:</strong> {{ $lugar->nombre }}</p>
    <p><strong>Dirección:</strong> {{ $lugar->direccion }}</p>
    <p><strong>Teléfono:</strong> {{ $lugar->telefono }}</p>
    <p><strong>Descripción:</strong> {{ $lugar->descripcion }}</p>
</body>
</html>
