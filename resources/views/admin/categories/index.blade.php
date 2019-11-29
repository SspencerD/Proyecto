@extends('layouts.work')

@section('title', 'Categorias (listado de Categorias)')

@section('contenido')

<div class="app-page-title">
  <div class="page-title-wrapper">
    <div class="page-title-heading">
      <div class="page-title-icon">
        <i class="pe-7s-drawer icon-gradient bg-happy-itmeo">
        </i>
      </div>
      <div>Categorias
        <div class="page-title-subheading">Una tabla que nos muestra todas las categorias de los productos
        </div>
      </div>
    </div>
    <div class="page-title-actions">
      <div class="d-inline-block dropdown">
        <a href="{{ '/admin/categories/create' }}" type="button" aria-haspopup="true" aria-expanded="false" class="btn-shadow btn btn-info">
          <span class="btn-icon-wrapper pr-2 opacity-7">
            <i class="fa fa-plus-square" aria-hidden="true"></i>
          </span>
          Nueva Categoria
        </a>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="main-card mb-3 card">
        <div class="card-header">Categorias disponibles
          <div class="btn-actions-pane-right">
          </div>
        </div>
        <div class="table-responsive">
          <table class="align-middle mb-0 table table-borderless table-striped table-hover">
            <thead>
              <tr>
                <th class="text-center">Imagen</th>
                <th class="text-center">Id</th>
                <th class='text-left'>Nombre</th>
                <th class='text-center'>Descripción</th>
                <th class='text-center'>Acciones</th>
              </tr>
            </thead>
            @foreach ($categories as $category)
            <tbody>
              <tr>
              <td class=""> <img src="{{ $category->featured_image_url }}" alt="" height="50"></td>
                <td class="text-center text-muted">{{ $category->id }}</td>
                <td>
                  <div class="widget-content-left flex2">
                    <div class="widget-heading">{{ $category->name }} </div>
                  </div>
                </td>
                <td class="text-center text-muted">{{ $category->description }}</td>
        </div>
      </div>
      </td>
      <td class="text-center">
        <div class="btn-group" role="group">
          <form method="post" action="{{ url('/admin/categories/'.$category->id) }}">
            {{ csrf_field() }} {{ method_field('DELETE') }}
            <a href="" type="button" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Ver Categoria">
              <i class="fa fa-search"></i>
            </a>
            <a href="{{ url('/admin/categories/'.$category->id.'/edit') }}" type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Editar Categoria">
              <i class="fa fa-pencil-square-o"></i>
            </a>

            <button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Eliminar Categoria">
              <i class="fa fa-trash"></i>
            </button>
          </form>
        </div>
      </td>
      </tr>
      @endforeach
      </tbody>
      </table>
    </div>
  </div>
</div>
<div class="text-center">{{ $categories->links() }} </div>
</div>
@endsection