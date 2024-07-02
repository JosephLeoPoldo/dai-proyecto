<!DOCTYPE html>
<html>
<head>
    <title>Ticket de Venta</title>
    <style>
        /* Añade tus estilos personalizados aquí */
    </style>
</head>
<body>
    <h1>Detalle de venta #{{$venta->id}}</h1>
    <p>Cliente: {{$venta->cliente->nombre}}</p>
    <table>
        <thead>
            <tr>
                <th>Descripción</th>
                <th>Código de barras</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($venta->productos as $producto)
                <tr>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->codigo_barras }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>{{ $producto->cantidad }}</td>
                    <td>{{ $producto->subtotal }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p>Total: {{$venta->total}}</p>
</body>
</html>
