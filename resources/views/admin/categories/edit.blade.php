@extends('layouts.work')

@section('title', 'Edicion de categoria ICSA')

@section('contenido')

<div class="app-page-title">
  <div class="page-title-wrapper">
    <div class="page-title-heading">
      <div class="page-title-icon">
        <i class="fa fa-pencil-square-o aria-hidden='true' text-success">
        </i>
      </div>
      <div>Edición de categoria
        <div class="page-title-subheading">¿No es la categoria apropiada? Arreglemoslo.
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
        <h5 class="card-title">¿Que Categoria vamos a editar?</h5>
        <form method="post" action="{{ url('/admin/categories/'.$category->id.'/edit') }}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-row">
            <div class="col-md-3">
              <div class="form-group">
                <label class="">Nombre</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label class="">Descripción</label>
                <input type="text" class="form-control" name="description" value="{{ Old('description') }}">
              </div>
            </div>
            <div class="col-md-3">
                <div class="position-relative form-group">
                  <label for="descripcion" class="">Subir imagen</label>
                  <input name="image" type="file" class="form-control btn btn-primary">
                  @if($category->image)
                  <p class="help-block alert alert-danger">Subir imagen solo si desea remplazar la
                  <a href="{{ asset('/images/categories/'.$category->image) }}" target="_blank">imagen actual</a>
                  </p>
                  @endif
                </div>
              </div>
          </div>
          <button class="mb-2 mr-2 btn btn-success">Editar</button>
          <a href="{{ url('/admin/categories') }}" class="mb-2 mr-2 btn btn-danger">Cancelar</a>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection