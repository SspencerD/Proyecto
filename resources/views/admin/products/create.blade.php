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
      <div>Creación de nuevo producto
        <div class="page-title-subheading">Hagamos un nuevo producto para nuestros clientes.
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
  @endif

  <div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
      <div class="main-card mb-3 card">
        <div class="card-body">
          <h5 class="card-title">¿Que producto vamos a crear?</h5>
          <form class="" method="post" action="{{ '/admin/products' }}">
            {{ csrf_field() }}
            <div class="form-row">
              <div class="col-md-3">
                <div class="position-relative form-group">
                  <label for="nombre" class="">Nombre</label>
                  <input name="name" id="nombre" placeholder="demosle un nombre" type="text" class="form-control" value="{{ old('name')  }}">
                </div>
              </div>
              <div class="col-md-3">
                <div class="position-relative form-group">
                  <label for="descripcion" class="">Descripción</label>
                  <input name="description" id="descripcion" placeholder="¿de que trata?" type="text" class="form-control" value="{{ old('description') }}">
                </div>
              </div>
              <div class="col-md-3">
                <div class="position-relative form-group">
                  <label for="descripcion" class="">Categoria</label>
                  <select name="category_id"  class="form-control">
                    <option Value="">General</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="position-relative col-md-2 form-group">
              <label for="price" class="">Precio</label>
              <input name="price" id="price" placeholder="12,000" type="numbrer" step="00.000,00" class="form-control" value="{{ old('price')  }}">
            </div>
            <div class="position-relative col-md-2 form-group">
              <label for="pricebuy" class="">Precio Compra</label>
              <input name="price_buy" id="pricebuy" placeholder="0,568" type="numbrer" step="00.000,00" class="form-control" value="{{ old('price_buy')}} ">
            </div>
            <div class="position-relative col-md-2 form-group"><label for="pricemajor" class="">Precio por mayor</label>
              <input name="price_major" id="pricemajor" placeholder="125,00" type="numbrer" step="00.000,00" class="form-control" value="{{ old('price_major') }}">
            </div>
            <div class="position-relative row form-group">
              <label for="descriptionlong" class="col-sm-2 col-form-label">Descripción detallada</label>
              <div class="col-sm-10">
                <textarea name="long_description" id="descriptionlong" class="form-control" placeholder="¿De que trata el producto, puedes explicarlo?">{{ old('long_description')  }}</textarea>
              </div>
            </div>
            <button class="mb-2 mr-2 btn btn-success">Registrar producto</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endsection









  