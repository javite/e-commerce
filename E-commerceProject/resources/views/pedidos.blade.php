@extends("plantilla")

@section("titulo")
  Listado de pedidos
@endsection
@section("cuerpo")
<div class="detail-container">
    <div class="product-container">
        <ul>
            @foreach ($pedido->productos as $producto)
                <li>{{$producto->nombre}}{{" $"}}{{$producto->precio}}</li>
            @endforeach
        </ul>
    </div>  
</div>
@endsection       
