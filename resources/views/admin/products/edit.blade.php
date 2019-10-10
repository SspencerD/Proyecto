@extends('layouts.work')

@section('title', 'Creación de producto ICSA')

@section('contenido')

<div class="app-page-title">
  <div class="page-title-wrapper">
    <div class="page-title-heading">
      <div class="page-title-icon">
        <i class="fa fa-pencil-square-o aria-hidden='true' text-success">
        </i>
      </div>
      <div>Edición de producto
        <div class="page-title-subheading">Veamos en que podemos mejorar este producto.
        </div>
      </div>
    </div>
  </div>
</div>
<!-- <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
  <li class="nav-item">
    <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
      <span>Layout</span>
    </a>
  </li>
  <li class="nav-item">
    <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
      <span>Grid</span>
    </a>
  </li>
</ul> -->

@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<div class="tab-content">
  <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
    <div class="main-card mb-3 card">
      <div class="card-body">
        <h5 class="card-title">¿Que producto vamos a editar?</h5>
        <form method="post" action="{{ url('/admin/products/'.$product->id.'/edit') }}">
          {{ csrf_field() }}
          <div class="form-row">
            <div class="col-md-3">
              <div class="form-group">
                <label class="">Nombre</label>
                <input type="text" class="form-control" name="name" value="">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label class="">Descripción</label>
                <input type="text" class="form-control" name="description" value="{{ old('description') }}">
              </div>
            </div>
          </div>
          <div class="col-md-2 form-group">
            <label class="">Precio</label>
            <input type="numbrer" step="00.000,00" class="form-control" name="price" value="{{ old('price') }}">
          </div>
          <div class="col-md-2 form-group">
            <label class="">Precio Compra</label>
            <input type="numbrer" step="00.000,00" class="form-control" name="price_buy" value="{{ old('price_buy') }} ">
          </div>
          <div class="col-md-2 form-group">
            <label class="">Precio por mayor</label>
            <input type="numbrer" step="00.000,00" class="form-control" name="price_major" value="{{ old('price_major') }}">
          </div>
          <div class="row form-group">
            <label class="col-sm-2 col-form-label">Descripción detallada</label>
            <div class="col-sm-10">
              <textarea class="form-control" name="long_description">{{ old('long_description') }}</textarea>
            </div>
          </div>
          <button class="mb-2 mr-2 btn btn-success">Editar</button>
          <a href="{{ url('/admin/products') }}" class="mb-2 mr-2 btn btn-danger">Cancelar</a>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection