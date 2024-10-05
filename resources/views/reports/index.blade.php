<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informes de Ventas</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Asegúrate de tener Bootstrap o tu CSS aquí -->
</head>
<body>
    <div class="container mt-5">
        <h1>Informes de Ventas</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID de Venta</th>
                    <th>Cliente</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio de Venta</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ventas as $venta)
                <tr>
                    <td>{{ $venta->id }}</td>
                    <td>{{ $venta->cliente->nombre }}</td> <!-- Asumiendo que tienes un campo 'nombre' en el modelo Cliente -->
                    <td>{{ $venta->producto->nombre }}</td> <!-- Asumiendo que tienes un campo 'nombre' en el modelo Producto -->
                    <td>{{ $venta->cantidad }}</td>
                    <td>{{ $venta->precio_venta }}</td>
                    <td>{{ $venta->created_at->format('d/m/Y') }}</td> <!-- Formato de fecha -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
