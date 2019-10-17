@extends('layouts.app')

@section('title', 'Industria Corchera | Ver Categoria')

@section('content')

@if (session('notificacion'))
<div class="alert alert-success">
  {{ session('notificacion') }}
</div>
@endif
  <div class="container">
  <div class="row">
    <div class="content col-sm-12">
      <div class="row">
        <div class="col-sm-5">
          <div class="thumbnails">
            <div><a class="thumbnail fancybox" href="#" title="{{ $category->name }}"><img src="{{ $category->featured_image_url }}" 
             alt="Categoria de la imagen  {{ $category->name }}" /></a></div>
          </div>
        </div>
        <div class="col-sm-7 prodetail">
          <h1 class="productpage-title">{{ $category->name }}</h1>
          <!--           <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="riview"><a href="#">1 reviews</a> / <a href="#">Write a review</a></span> </div>
 -->
          <hr>
          <p class="product-desc"> {{ $category->description }}</p>
</div>
  @foreach ($products as $product)
  <div class="product-layout  product-grid  col-lg-3  col-sm-6">
    <div class="item">
      <div class="product-thumb">
        <div class="image product-imageblock"> <a href="product.html"> <img src="{{ $product->featured_image_url }}" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
            <img src="{{ $product->images->first()->image }}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
          <ul class="button-group">
            <li>
              <b>
                <h4 href="" class="btn-light"><a href="#" title="Category">{{ $product->category->name }}</a></h4><b>
            </li>
            <li> <a href="" class="btn btn-primary btn-sm btn-round" data-toggle="tooltip" data-placement="top" title="Agregar a lista de deseos"><i class="fa fa-heart-o"></i></a>
            </li>
            <li><a href="" class="btn btn-primary btn-sm btn-round" data-toggle="tooltip" data-placement="top" title="Compare este producto"><i class="fa fa-exchange"></i></a>
            </li>
            <li><a href="{{ url('/products/'.$product->id) }}" class="btn btn-primary btn-sm btn-round" data-toggle="tooltip" data-placement="top" title="Vista rapida"><i class="fa fa-eye"></i></a>
            </li>
            <li></li>
            <li></li>
            <br><br><br><br><br><br><br><br><br>
          </ul>
          <br><br>
          @if (session('notificacion'))
          <div class="alert alert-success">
            {{ session('notificacion') }}
          </div>
          @endif

        </div>
        <div class="caption product-detail">
          <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
          <h4 class="product-name"><a href="{{ url('/products/'.$product->id) }}" title="Casual Shirt With Ruffle Hem">{{ $product->name }}</a></h4>
          <h4 class="product-name"><a href="#" title="Category">{{ $product->category_name }}</a></h4>
          <h4 class="product-name"><a href="#" title="Details">{{ $product->description }}</a></h4>
          <p class="price product-price">$ {{ $product->price }}</p>
        </div>
        <form method="post" action="{{ url('/cart') }}">
          {{ csrf_field() }}
          <div class="form-group">
            <div class="qty">
              <input type="hidden" name="product_id" value="{{ $product->id }}">
              <label for="quantity">Cantidad</label>
              <input type="number" id="qty" name="quantity" placeholder="1">
            </div>
            <button type="submit" data-toggle="tooltip" data-placement="top" title="Agregar a Carrito" class="btn btn-success btn-sm "><i class="fa fa-shopping-bag"></i>Añadir a Carrito
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endforeach

  <br>
  <br>
  <div class="viewmore">
    {{ $products->links() }}
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection