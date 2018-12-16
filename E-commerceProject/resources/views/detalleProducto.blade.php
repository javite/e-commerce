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
            <h3 class="product-price">${{$producto->precio}} </h3>
            <form class="form-cart" action="cart" method="post">
                    @csrf
                <div>
                <label class="quantity-label">CANTIDAD</label>
                <input type="number" class="quantity">
            </div>
                <button type="submit" class="add-cart">Agregar al carrito</button>
            </form>
            <p class="product-description">{{$producto->descripcion}} </p>
        </div>
    </div>  
</div>
@endsection       
