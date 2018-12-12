<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Producto</h1>
    <ul>
        @foreach ($productos as $producto)
        <li>{{$producto->nombre}}  {{$producto->precio}} {{$producto->descripcion}}  
        </li>
        @endforeach
        @foreach ($categorias as $categoria)
        <li>{{$categoria->nombre}}</li>
        @endforeach
    </ul>
</body>
</html>