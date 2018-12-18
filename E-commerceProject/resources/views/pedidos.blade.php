@extends("plantilla")

@section("titulo")
  Listado de pedidos
@endsection
@section("cuerpo")
<div class="detail-container">
            <div class="category-title">
                <h1>CARRITO</h1>
            </div>
            @if(sizeof($pedidos)>0)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">SKU</th>
                        <th scope="col">MARCA</th>
                        <th scope="col">MODELO</th>
                        <th scope="col">CANTIDAD</th>
                        <th scope="col">PRECIO</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pedidos as $pedido)
                        <tr>
                        <th scope="row">{{$pedido->producto->id}}</th>
                        <td>{{$pedido->producto->marcas->nombre}}</td>
                        <td>{{$pedido->producto->nombre}}</td>
                        <td>{{$pedido->cantidad}}</td>
                        <td>$ {{$pedido->producto->precio}}</td>
                        </tr>
                    @endforeach
                    <tr>
                    <th scope="row">TOTAL</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><strong>$ {{$total}}</strong></td>
                    </tr>
                </tbody>
                </table>
                <form action="/comprar" method="POST" >
                    {{ csrf_field() }}
                    <button class="btn btn-success float-right" type="submit">COMPRAR</button>
                </form>
            @else
                <h3 class="float-center">No compraste nada todavia</h3>
            @endif
</div>
@endsection       
