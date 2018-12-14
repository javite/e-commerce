@extends("plantilla")

@section("titulo")
REGAL.AR
@endsection


@section("cuerpo")
    <section class="section-articulos">
    @foreach ($productos as $producto)
    <div class="card" style="width: 18rem;">
        <div class="img-container"> 
            <img class="card-img-top" src="/img/producto-{{$producto->id}}.jpg" alt="imagen producto">
            <div class="comprar">
                <a class="zoom" href="/detalleProducto/{{$producto->id}}">COMPRAR</a>
            </div>
        </div>
        <div class="card-body">
            <h3 class="card-title">{{$producto->nombre}}</h3>
            <h5 class="valor">${{$producto->precio}}</h5>
            <p class=".card-subtitle">6 cuotas sin INTERES</p>
        </div>
    </div>
    @endforeach
        
    </section>
    @endsection
