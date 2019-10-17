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
      <div>Creación de nueva Categoria
        <div class="page-title-subheading">¿Otra categoria? , mas productos!.
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
          <h5 class="card-title">¿Que categoria vamos a crear?</h5>
          <form class="" method="post" action="{{ '/admin/categories' }}">
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
            </div>
            <button class="mb-2 mr-2 btn btn-success">Registrar categoria</button>
            <a href="{{ url('/admin/categories') }}" class="mb-2 mr-2 btn btn-danger">Cancelar</a>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endsection









  