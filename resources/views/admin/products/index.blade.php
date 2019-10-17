@extends('layouts.work')

@section('title', 'Productos (listado de productos)')

@section('contenido')

<div class="app-page-title">
  <div class="page-title-wrapper">
    <div class="page-title-heading">
      <div class="page-title-icon">
        <i class="pe-7s-drawer icon-gradient bg-happy-itmeo">
        </i>
      </div>
      <div>Productos
        <div class="page-title-subheading">Una tabla que nos muestra todos nuestros productos en venta
        </div>
      </div>
    </div>
    <div class="page-title-actions">
      <div class="d-inline-block dropdown">
        <a href="{{ '/admin/products/create' }}" type="button" aria-haspopup="true" aria-expanded="false" class="btn-shadow btn btn-info">
          <span class="btn-icon-wrapper pr-2 opacity-7">
            <i class="fa fa-plus-square" aria-hidden="true"></i>
          </span>
          Nuevo Producto
        </a>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="main-card mb-3 card">
        <div class="card-header">Productos disponibles
          <div class="btn-actions-pane-right">
          </div>
        </div>
        <div class="table-responsive">
          <table class="align-middle mb-0 table table-borderless table-striped table-hover">
            <thead>
              <tr>
                <th class="text-center">Id</th>
                <th class='text-left'>Nombre y categoria</th>
                <th class='text-center'>Descripción</th>
                <th class='text-right'>Precio al detalle</th>
                <th class='text-right'>Precio de compra</th>
                <th class='text-right'>Precio por mayor</th>
                <th class='text-center'>Acciones</th>
              </tr>
            </thead>
            @foreach ($products as $product)
            <tbody>
              <tr>
                <td class="text-center text-muted">{{ $product->id }}</td>
                <td>
                  <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                      <div class="widget-content-left mr-3">
                      </div>
                      <div class="widget-content-left flex2">
                        <div class="widget-heading">{{ $product->name }} </div>
                        <div class="widget-subheading opacity-7">{{ $product->category_name }}</div>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="text-center">{{$product->description}}</td>
                <td class="text-center">
                  $ {{$product->price}}
                </td>
                <td class="text-center">
                  &euro; {{$product->price_buy}}
                </td>
                <td class="text-center">
                  $ {{$product->price_major}}
                </td>
                <td class="text-center">
                <div class="btn-group" role="group" aria-label="Basic example">
                  <form method="post" action="{{ url('/admin/products/'.$product->id) }}">
                    <a href="{{ url('/products/'.$product->id) }}" type="button" class="btn btn-info btn-sm" data-toggle="tooltip"
                     data-placement="top" title="Ver producto" target="_blank">
                      <i class="fa fa-search"></i>
                    </a>
                    <a href="{{ url('/admin/products/'.$product->id.'/images') }}" type="button" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Ver imagenes">
                      <i class="fa fa-picture-o"></i>
                    </a>
                    <a href="{{ url('/admin/products/'.$product->id.'/edit') }}" type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Editar producto">
                      <i class="fa fa-pencil-square-o"></i>
                    </a>
                    {{ csrf_field() }} {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Eliminar producto">
                      <i class="fa fa-trash"></i>
                    </button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="text-center">{{ $products->links() }} </div>
  </div>
@endsection