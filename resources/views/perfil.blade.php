@extends('layouts.app')

@section('title','Perfil |' .config('app.name'))

@section('content')

<div id="center">
  <div class="container">
    <div class="row">
      <div class="content col-sm-12">
        <div class="customtab">
          <h3 class="productblock-title">Bienvenido: {{ Auth::user()->name }} </h3>
          <hr>
          <br><br><br>

          <a href="{{ url('/') }}" class="btn btn-primary">Volver al inicio</a>

          <br><br><br><br><br><br>


        </div>

        @if (session('notificacion'))
        <div class="alert alert-success">
          {{ session('notificacion') }}
        </div>
        @endif

        <div class="button-group">
          <p>
            <a class="btn btn-primary" data-toggle="collapse" href="#carrito" role="button" aria-expanded="false" aria-controls="carrito">Tu Carrito de compras</a>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#pedidos" aria-expanded="false" aria-controls="pedidos">Tus pedidos</button>
          </p>
          <hr>
          <span> Usted tiene {{ auth()->user()->cart->details->count() }} item(s) en su carrito</span>
          <hr>

          <div class="row">
            <div class="col">
              <div class="collapse multi-collapse" id="carrito">
                <div class="card card-body">
                  <div class="table-responsive">

                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                      <thead>
                        <tr>
                          <th class="text-center">#</th>
                          <th class='text-left'>Nombre</th>
                          <th class='text-center'>Precio</th>
                          <th class='text-right'>Cantidad</th>
                          <th class='text-center'>sub total</th>
                          <th class='text-center'>iva</th>
                          <th class='text-center'>Acciones</th>
                        </tr>
                      </thead>
                      @foreach (auth()->user()->cart->details as $detail)
                      <tbody>
                        <tr>
                          <td class="text-center text-muted">
                            <a href="{{ url('/products/'.$detail->product->id) }}" target="_blank"></a>
                            <img src="{{ $detail->product->featured_image_url }}" alt="" height="50">
                          </td>
                          <td>
                            <div class="widget-content p-0">
                              <div class="widget-content-wrapper">
                                <div class="widget-content-left mr-3">
                                </div>
                                <div class="widget-content-left flex2">
                                  <div class="widget-heading"> <a href="{{ url('/products/'.$detail->product->id) }}" target="_blank"></a>{{ $detail->product->name }} </div>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td class="text-center">
                            $ {{$detail->product->price}}
                          </td>
                          <td class="text-center">
                            {{$detail->quantity}}
                          </td>
                          <td>
                            $ {{$detail->quantity * $detail->product->price}}
                          </td>
                          <td>
                            $ {{$detail->quantity * $detail->product->price *0.19 }}
                          </td>
                          <td class="text-center">
                            <div class="btn-group" role="group" aria-label="Basic example">
                              <form method="post" action="{{ url('/cart') }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <input type="hidden" name="cart_detail_id" value="{{ $detail->id }}">

                                <a href="{{ url('/products/'.$detail->product->id) }}" target="_blank" type="button" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Ver producto">
                                  <i class="fa fa-info"></i>
                                </a>

                                <button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Eliminar producto">
                                  <i class="fa fa-trash"></i>
                                </button>
                              </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                      <tfoot>
                        <tr>
                          <td>SUBTOTAL:</td>
                          <td>$ {{ auth()->user()->cart->subtotal }} </td>
                        </tr>
                        <tr>
                          <td>IVA 19%</td>
                        <td>$ {{ auth()->user()->cart->subtotal * 0.19 }}</td>
                        </tr>
                        <tr>
                          <td><span> TOTAL:</span></td>
                        <td>$ {{ auth()->user()->cart->subtotal * 1.19 }}</td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <hr>
                    <form  method="post"action="{{ url('/order') }}">
                    {{ @csrf_field() }}
                    <button type="submit" data-toggle="tooltip" data-placement="top" title="Realizar Pedido" class="btn btn-success  "><i class="fa fa-cart-arrow-down" aria-hidden="true">&nbsp; &nbsp;</i> Realizar pedido
                    </button>
                  </form>
                    <hr>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="collapse multi-collapse" id="pedidos">
                <div class="card card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    @endsection