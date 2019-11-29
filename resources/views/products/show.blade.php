@extends('layouts.app')

@section('title', 'Industria Corchera | Ver Producto')

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
            <div><a class="thumbnail fancybox" href="#" title="{{$product->name}}"><img src="{{ $product->featured_image_url }}" title="{{$product->name}}" alt="image lost" /></a></div>
            <div id="product-thumbnail" class="owl-carousel">
              @foreach($images as $image)
              <div class="item">
                <div class="image-additional"><a class="thumbnail fancybox" href="#product-thumbnail" title="iPod Classic"> <img src="{{ $image->url }}" title="image_product1" alt="image_product" /></a></div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
        <div class="col-sm-7 prodetail">
          <h1 class="productpage-title">{{$product->name}}</h1>
          <!--           <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="riview"><a href="#">1 reviews</a> / <a href="#">Write a review</a></span> </div>
 -->
          <ul class="list-unstyled productinfo-details-top">
            <li>
              <h2 class="productpage-price">${{$product->price}}</h2>
            </li>
            <li><span class="productinfo-tax">iva incl: ${{$product->price*1.19 }}</span></li>
          </ul>
          <hr>
          <ul class="list-unstyled product_info">
            <li>
              <label>Categoria</label>
              <span> <a href="#">{{$product->category->name}}</a></span></li>
            <li>
              <label>Codigo producto:</label>
              <span> product 20</span></li>
            <li>
              <label>Disponibilidad:</label>
              <span> In Stock</span></li>
          </ul>
          <hr>
          <p class="product-desc"> {{ $product->description }}</p>
          <div id="product">
            <form method="post" action="{{ url('/cart') }}">
              {{ csrf_field() }}
              <input type="hidden" name="product_id" value="{{ $product->id }}">
              <div class="form-group">
                <div class="qty">
                  <label>Cantidad</label>
                  <input id="qty" placeholder="1" type="number" name="quantity">
                  @if (auth()->check())
                  <ul class="button-group list-btn">
                    <li>
                      <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Agregar a lista de deseos"><i class="fa fa-heart-o"></i></button>
                    </li>
                  </ul>
                  <button type="submit" data-toggle="tooltip" data-placement="top" title="Agregar a Carrito"><i class="fa fa-shopping-bag"></i>Añadir a Carrito</button>

                  @else
                <a href="{{ url('/login?redirect_to='.url()->current()) }}" type="submit" data-toggle="tooltip" data-placement="top" title="Agregar a Carrito"><i class="fa fa-shopping-bag"></i>Añadir a Carrito</button>


                  @endif
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="productinfo-tab">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#tab-description" data-toggle="tab">Descripción</a></li>
      <!--   <li><a href="#tab-review" data-toggle="tab">Reviews</a></li> -->
    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="tab-description">
        <div class="cpt_product_description ">
          <div>
            <p>
              <h1><b>{{$product->name}}.</b></h1>
            </p>
            <hr>
            <p>{{$product->long_description }}</p>
          </div>
        </div>
      </div>
      <!-- contendor para hacer una review del producto...
          <div class="tab-pane" id="tab-review">
            <form class="form-horizontal">
              <div id="review"></div>
              <h2>Write a review</h2>
              <div class="form-group required">
                <div class="col-sm-12">
                  <label class="control-label" for="input-name">Your Name</label>
                  <input type="text" name="name" value="" id="input-name" class="form-control" />
                </div>
              </div>
              <div class="form-group required">
                <div class="col-sm-12">
                  <label class="control-label" for="input-review">Your Review</label>
                  <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                  <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
                </div>
              </div>
              <div class="form-group required">
                <div class="col-sm-12">
                  <label class="control-label">Rating</label>
                  &nbsp;&nbsp;&nbsp; Bad&nbsp;
                  <input type="radio" name="rating" value="1" />
                  &nbsp;
                  <input type="radio" name="rating" value="2" />
                  &nbsp;
                  <input type="radio" name="rating" value="3" />
                  &nbsp;
                  <input type="radio" name="rating" value="4" />
                  &nbsp;
                  <input type="radio" name="rating" value="5" />
                  &nbsp;Good</div>
              </div>
              <div class="buttons clearfix">
                <div class="pull-right">
                  <button type="button" id="button-review" data-loading-text="Loading..." class="btn btn-primary">Continue</button>
                </div>
              </div>
            </form>
          </div>
-->
    </div>
  </div>
</div>
</div>
</div>
@endsection