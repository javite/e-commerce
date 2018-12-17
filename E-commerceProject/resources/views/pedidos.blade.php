@extends("plantilla")

@section("titulo")
  Listado de pedidos
@endsection
@section("cuerpo")
<div class="detail-container">
    <div class="product-container">
        <ul>
            @foreach ($pedidos as $pedido)
                <li>Pedido: {{$pedido->id}}</li>
            @endforeach
        </ul>
    </div>  
</div>
@endsection       
