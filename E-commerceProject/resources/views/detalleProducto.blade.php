@extends("plantilla")

@section("titulo")
  Listado de películas
@endsection
@section("cuerpo")
    <h1>Producto</h1>
    <div class="imagen">
        <img src="/img/producto-{{$producto->id}}.jpg" alt="">
    </div>
        <h1>{{$producto->nombre}}  </h1>
        <h2>{{$producto->descripcion}} </h2>
        <h3>{{$producto->precio}} </h3> 
@endsection       
