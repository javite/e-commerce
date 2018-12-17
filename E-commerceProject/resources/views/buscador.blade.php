@extends("plantilla")

@section("titulo")
REGAL.AR
@endsection
{{-- --------------------------------------------------------------------
{{-- Hacer una vista para mostrar la info que trae el buscador --}}
{{-- -------------------------------------------------------------------- -- --}}

@section("cuerpo")

    @if(isset($categoria))
        <div class="category-title"><h1>{{$categoria->nombre}}</h1></div>
    @endif
    <section class="section-articulos container">
    @foreach ($busqueda as $buscado)
    <div class="card" style="width: 18rem;">
        <div class="img-container">
            <img class="card-img-top" src="/img/producto-{{$buscado->id}}.jpg" alt="imagen producto">
            <div class="comprar">
                <a class="zoom" href="/detalleProducto/{{$buscado->id}}">VER MAS</a>
            </div>
        </div>
        <div class="card-body">
            <h3 class="card-title">{{$buscado->nombre}}</h3>
            <h4 class="card-brand">{{$buscado->marcas->nombre}}</h4>
            <h5 class="valor">${{$buscado->precio}}</h5>
            <p class=".card-subtitle">6 cuotas sin INTERES</p>
        </div>
    </div>
    @endforeach

    </section>
    @endsection
