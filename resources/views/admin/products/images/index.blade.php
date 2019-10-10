@extends('layouts.work')

@section('title', 'Imagenes de productos')

@section('contenido')

<div class="app-page-title">
  <div class="page-title-wrapper">
    <div class="page-title-heading">
      <div class="page-title-icon">
        <i class="fa fa-picture-o icon-gradient bg-happy-itmeo">
        </i>
      </div>
      <div>Imagenes de {{ $product->name }}
        <div class="page-title-subheading">Las imagenes que acompañan tu producto.
        </div>
      </div>
    </div>
    <div class="page-title-actions">
      <hr>
      <div class="d-inline-block">
        <form method="post" action="" enctype="multipart/form-data">
          {{ csrf_field() }}
          <input class="btn btn-primary" type="file" name="photo" id="" required>
          <button type="submit" class="btn-shadow btn btn-info">
            <span class="btn-icon-wrapper pr-2 opacity-7">
              <i class="fa fa-plus-square" aria-hidden="true"></i>
            </span>
            Cargar imagen
          </button>
          <a href="{{ '/admin/products' }}" type="button" aria-haspopup="true" aria-expanded="false" class="btn-shadow btn btn-danger">
            <span class="btn-icon-wrapper pr-2 opacity-7">
              <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </span>
            Volver al listado
          </a>
        </form>
        <hr>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <div class="card-deck">
    @foreach ($images as $image)
    <div class="card hover">
      <img class="card-img-top" src="{{ $image->url }}" alt="una imagen" width="270" height="210">
      <div class="card-body">
        <p class="card-text"><small class="text-muted">ingresada hace: </small></p>
        <form method="post">
          {{csrf_field() }}
          {{ method_field('DELETE') }}
          <input type="hidden" name="image_id" value="{{ $image->id }}">
          @if ($image->featured)
          <button type="button" class="btn btn-success btn-sm btn-round " data-toggle="tooltip" data-placement="top" title="Destacado">
            <i class="fa fa-check" aria-hidden="true"></i>
          </button>
          @else
          <a href="{{ url('/admin/products/'.$product->id.'/images/select/'.$image->id) }}" 
          class="btn btn-warning btn-sm btn-round " data-toggle="tooltip" data-placement="top" title="Destacar Imagen">
          <i class="fa fa-star" aria-hidden="true"></i>
        </a>
          @endif
          <button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fa fa-times" aria-hidden="true"></i></button>
        </form>
      </div>
    </div>
    @endforeach
  </div>
  <br><br><br>
</div>
@endsection