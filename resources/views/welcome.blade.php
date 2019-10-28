@extends('layouts.app')

@section('title',' Bienvenidos a| '. config('app.name'))


@section('estilo')

<style>
  .products-layouts .product-grid .col-lg-3 .col-sm-3 {

    margin-bottom: 5em;
  }


  .product-layout {

    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
  }

  .product-layout>[class*='col-'] {
    display: flex;
    flex-direction: column;
  }
</style>
@endsection
@section('content')
<div id="center">
  <div class="container">
    <div class="row">
      <div class="content col-sm-12">
        <div class="customtab">
          <h3 class="productblock-title">Nuestros productos </h3>
          <div id="tabs" class="customtab-wrapper">
            <ul class='customtab-inner'>
              <li class='tab'><a href="#tab-tapones">Tapones</a></li>
              <li class='tab'><a href="#tab-barricas">Barricas</a></li>
              <li class='tab'><a href="#tab-maderas">Maderas</a></li>
              <li class='tab'><a href="#tab-insumos">Insumos</a></li>
              <li class='tab'><a href="#tab-repuestos">Repuestos</a></li>
            </ul>
          </div>
        </div>
        <div id="tab-tapones" class="tab-content">
          @foreach ($products as $product)
          <div class="product-layout  product-grid col-lg-3  col-sm-3">
            <div class="item">
              <div class="product-thumb">
                <div class="image product-imageblock"> <a href="product.html"> <img src="{{ $product->featured_image_url }}" class="img-responsive" />
                    <img src="{{ $product->images->first()->image }}" class="img-responsive" /> </a>
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
      <div id="tab-barricas" class="tab-content">
        @foreach ($products as $product)
        <div class="product-layout  product-grid  col-lg-3  col-sm-6">
          <div class="item">
            <div class="product-thumb">
              <div class="image product-imageblock"> <a href="product.html"> <img src="{{ $product->featured_image_url }}" class="img-responsive" />
                  <img src="{{ $product->images->first()->image }}" class="img-responsive" /> </a>
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
<div class="parallax-container">
  <div class="parallax"><img src="image/prlx.jpg" alt="#"></div>
  <div class="container">
    <ul id="testimonial" class="row owl-carousel product-slider">
      <li class="item">
        <div class="panel-default">
          <div class="testimonial-image z-depth-5"><img src="image/t1.png" alt="#"></div>
          <div class="testimonial-name">
            <h2>Janet Wilson</h2>
          </div>
          <div class="testimonial-designation">
            <p>Web Designer</p>
          </div>
          <div class="testimonial-desc">Rem ipsum doLoremRem ipsum doLorem ipsum ipsum doLorem ipsum ut labore et dolore ma ipsum ut labore etdolore ipsum doLorem ipsum ut labore et dolore mamagna. Lorem ipsumut labore et dolore mamagna. Lorem ipsum doLorem ipsum dolor sit amet, consectetur adipisicing.</div>
        </div>
      </li>
      <li class="item">
        <div class="panel-default">
          <div class="testimonial-image"><img src="image/t2.png" alt="#"></div>
          <div class="testimonial-name">
            <h2>Linda Howard</h2>
          </div>
          <div class="testimonial-designation">
            <p>Web Deweloper</p>
          </div>
          <div class="testimonial-desc">Rem ipsum doLoremRem ipsum doLorem ipsum ipsum doLorem ipsum ut labore et dolore ma ipsum ut labore etdolore ipsum doLorem ipsum ut labore et dolore mamagna. Lorem ipsumut labore et dolore mamagna. Lorem ipsum doLorem ipsum dolor sit amet, consectetur adipisicing.</div>
        </div>
      </li>
      <li class="item">
        <div class="panel-default">
          <div class="testimonial-image"><img src="image/t3.png" alt="#"></div>
          <div class="testimonial-name">
            <h2>Janet Wilson</h2>
          </div>
          <div class="testimonial-designation">
            <p>Web Designer</p>
          </div>
          <div class="testimonial-desc">Rem ipsum doLoremRem ipsum doLorem ipsum ipsum doLorem ipsum ut labore et dolore ma ipsum ut labore etdolore ipsum doLorem ipsum ut labore et dolore mamagna. Lorem ipsumut labore et dolore mamagna. Lorem ipsum doLorem ipsum dolor sit amet, consectetur adipisicing.</div>
        </div>
      </li>
    </ul>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="content col-sm-12">
      <div class="customtab">
        <h3 class="productblock-title">Featured Products</h3>
        <h4 class="title-subline">What’s so special? Check it out!</h4>
      </div>
      <div id="tab-furniture" class="tab-content">
        <div id="special-slidertab" class="row owl-carousel product-slider">
          <div class="item">
            <div class="product-thumb">
              <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product2.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="image/product/product2-2.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                <ul class="button-group">
                  <li>
                    <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                  </li>
                  <li>
                    <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                  </li>
                  <li>
                    <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="fa fa-eye"></i></button>
                  </li>
                  <li>
                    <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                  </li>
                </ul>
              </div>
              <div class="caption product-detail">
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle Hem</a></h4>
                <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="product-thumb">
              <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product3.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="image/product/product3-3.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                <ul class="button-group">
                  <li>
                    <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                  </li>
                  <li>
                    <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                  </li>
                  <li>
                    <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="fa fa-eye"></i></button>
                  </li>
                  <li>
                    <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                  </li>
                </ul>
              </div>
              <div class="caption product-detail">
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle Hem</a></h4>
                <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="product-thumb">
              <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product4.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="image/product/product4-4.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                <ul class="button-group">
                  <li>
                    <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                  </li>
                  <li>
                    <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                  </li>
                  <li>
                    <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="fa fa-eye"></i></button>
                  </li>
                  <li>
                    <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                  </li>
                </ul>
              </div>
              <div class="caption product-detail">
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle Hem</a></h4>
                <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="product-thumb">
              <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product5.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="image/product/product5-5.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                <ul class="button-group">
                  <li>
                    <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                  </li>
                  <li>
                    <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                  </li>
                  <li>
                    <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="fa fa-eye"></i></button>
                  </li>
                  <li>
                    <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                  </li>
                </ul>
              </div>
              <div class="caption product-detail">
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle Hem</a></h4>
                <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="product-thumb">
              <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product6.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="image/product/product6-6.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                <ul class="button-group">
                  <li>
                    <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                  </li>
                  <li>
                    <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                  </li>
                  <li>
                    <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="fa fa-eye"></i></button>
                  </li>
                  <li>
                    <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                  </li>
                </ul>
              </div>
              <div class="caption product-detail">
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle Hem</a></h4>
                <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="product-thumb">
              <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product7.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="image/product/product7-7.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                <ul class="button-group">
                  <li>
                    <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                  </li>
                  <li>
                    <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                  </li>
                  <li>
                    <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="fa fa-eye"></i></button>
                  </li>
                  <li>
                    <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                  </li>
                </ul>
              </div>
              <div class="caption product-detail">
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle Hem</a></h4>
                <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="blog">
        <div class="blog-heading">
          <h3>The Latest News</h3>
          <h4 class="title-subline">Get amazing fashion inspiration, ideas and news in a click.</h4>
        </div>
        <div class="blog-inner">
          <ul class="list-unstyled blog-wrapper" id="latest-blog">
            <li class="item blog-slider-item">
              <div class="blog1 blog">
                <div class="blog-image"> <a href="#" class="blog-imagelink"><img src="image/blog/blog_1.jpg" alt="#"></a> <span class="blog-hover"></span> <span class="blog-readmore-outer"></span> </div>
                <div class="blog-content">
                  <h2 class="blog-name"><a href="#">Putamus parum claram, anteposuerit the new of model litterarum formas ...</a></h2>
                  <span class="blog-author">Poted by: <a href="#">Lionode Themes</a></span><span class="blog-date">Jun 29, 2017</span> <a href="single-blog.html" class="blog-readmore">Read more</a>
                </div>
              </div>
            </li>
            <li class="item blog-slider-item">
              <div class="blog2 blog">
                <div class="blog-image"> <a href="#" class="blog-imagelink"><img src="image/blog/blog_2.jpg" alt="#"></a> <span class="blog-hover"></span> <span class="blog-readmore-outer"></span> </div>
                <div class="blog-content">
                  <h2 class="blog-name"><a href="#">Putamus parum claram, anteposuerit the new of model litterarum formas ...</a></h2>
                  <span class="blog-author">Poted by: <a href="#">Lionode Themes</a></span><span class="blog-date">Jun 29, 2017</span> <a href="single-blog.html" class="blog-readmore">Read more</a>
                </div>
              </div>
            </li>
            <li class="item blog-slider-item">
              <div class="blog3 blog">
                <div class="blog-image"> <a href="#" class="blog-imagelink"><img src="image/blog/blog_3.jpg" alt="#"></a> <span class="blog-hover"></span> <span class="blog-readmore-outer"></span> </div>
                <div class="blog-content">
                  <h2 class="blog-name"><a href="#">Putamus parum claram, anteposuerit the new of model litterarum formas ...</a></h2>
                  <span class="blog-author">Poted by: <a href="#">Lionode Themes</a> </span><span class="blog-date">Jun 29, 2017</span> <a href="single-blog.html" class="blog-readmore">Read more</a>
                </div>
              </div>
            </li>
            <li class="item blog-slider-item">
              <div class="blog4 blog">
                <div class="blog-image"> <a href="#" class="blog-imagelink"><img src="image/blog/blog_4.jpg" alt="#"></a> <span class="blog-hover"></span> <span class="blog-readmore-outer"></span> </div>
                <div class="blog-content">
                  <h2 class="blog-name"><a href="#">Putamus parum claram, anteposuerit the new of model litterarum formas ...</a></h2>
                  <span class="blog-author">Poted by: <a href="#">Lionode Themes</a></span><span class="blog-date">Jun 29, 2017</span> <a href="single-blog.html" class="blog-readmore">Read more</a>
                </div>
              </div>
            </li>
            <li class="item blog-slider-item">
              <div class="blog5 blog">
                <div class="blog-image"> <a href="#" class="blog-imagelink"><img src="image/blog/blog_5.jpg" alt="#"></a> <span class="blog-hover"></span> <span class="blog-readmore-outer"></span> </div>
                <div class="blog-content">
                  <h2 class="blog-name"><a href="#">Putamus parum claram, anteposuerit the new of model litterarum formas ...</a></h2>
                  <span class="blog-author">Poted by: <a href="#">Lionode Themes</a></span><span class="blog-date">Jun 29, 2017</span> <a href="single-blog.html" class="blog-readmore">Read more</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@guest
@include('includes.fastregister')  
@endguest
@include('includes.representaciones')
@include('includes.footer')
@endsection