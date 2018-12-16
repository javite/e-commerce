@extends("plantilla")

@section("titulo")
  Listado de películas
@endsection
@section("cuerpo")
<div class="detail-container">
    <div class="product-container">
        <div class="product-img">
            <img src="/img/producto-{{$producto->id}}.jpg" alt="">
        </div>
        <div class="product-text-container">
            <h1 class="producto-title">{{$producto->nombre}}  </h1>
            <h4 class="card-brand">Marca: {{$producto->marcas->nombre}}</h4>
            <p class="product-description">{{$producto->descripcion}} </p>
            <h3 class="product-price">${{$producto->precio}} </h3>
            <form class="form-cart" action="/pedidoAdd" method="post">
                    @csrf
                <div>
                    <input type="hidden" name="id" value="{{$producto->id}}">
                    <label class="quantity-label">CANTIDAD</label>
                    <input type="number" name="quantity" class="quantity" value="1">
                </div>
                <button type="submit" class="add-cart">Agregar al carrito</button>
            </form>
            
        </div>
    </div>  
</div>
@endsection       
