@extends('layouts.work')

@section('title', 'Reclamos')

@section('contenido')

<div class="app-page-title">
  <div class="page-title-wrapper">
    <div class="page-title-heading">
      <div class="page-title-icon">
            <i class="fas fa-book icon-gradient bg-happy-itmeo">
        </i>
      </div>
      <div>Reclamos
        <div class="page-title-subheading">Listado de los reclamos</div>
      </div>
    </div>
    <div class="page-title-actions">
      <div class="d-inline-block dropdown">
        <a href="{{ '/claims/create' }}" type="button" aria-haspopup="true" aria-expanded="false" class="btn-shadow btn btn-info">
          <span class="btn-icon-wrapper pr-2 opacity-7">
            <i class="fas fa-bullhorn"></i></span>
                Ingresar nuevo reclamo
        </a>
      </div>
    </div>
  </div>
  <div class="main-card mb-3 card">
    <table class="table table-hover">
      <div class="card-header">Lista de reclamos
        </div>
      <thead>
        <tr>
            <th class="text-center">#</th>
            <th class='text-center'>Detalle</th>
            <th class='text-center'>Codigo producto</th>
            <th class='text-center'>Producto</th>
            <th class='text-center'>Lote</th>
            <th class='text-center'>cant despachada</th>
            <th class='text-center'>cant reclamada</th>
            <th class='text-center'>Causa</th>
            <th class='text-center'>Fecha</th>
            <th class='text-center'>Estado</th>
            <th class='text-center'>Acciones</th>
        </tr>
      </thead>
      <tbody>
          @foreach($claims as $claim)
          <tr>
          <td class="text-center text-muted">{{$claim->id }}</td>
              <td>
                <div class="widget-content p-0">
                  <div class="widget-content-wrapper">
                    <div class="widget-content-left flex2">
                    <div class="widget-heading" data-toggle="tooltip" data-placement="top" title="{{$claim->title}}">{{ substr($claim->title,0,8) }}...</div>
                      <div class="widget-subheading opacity-7">{{$claim->partner_id }}</div>
                    </div>
                  </div>
                </div>
              </td>
            <td class="text-center"><b>{{ $claim->product_id }}</b></td>
            <td class="text-center">{{ $claim->product_id }}</td>
              <td class="text-center">{{ $claim->lote }} </td>
            <td class="text-center">{{ $claim->qty_delivery }}</td>
            <td class="text-center">{{ $claim->qty_claim }}</td>
            <td class="text-center">{{ $claim->cause_id }}</td>
            <td class="text-center">{{ $claim->created_at }}</td>
            <td class="text-center"><span class="badge badge-warning">{{ $claim->status }}</span></td>
              <td class="text-center">
              <div class="btn-group" role="group" aria-label="Basic example">
                <form method="post" action="">
                <a href="{{ url('/claims/'.$claim->id) }}" type="button" class="btn btn-info btn-sm" data-toggle="tooltip"
                   data-placement="top" title="Ver Reclamo" target="_blank">
                    <i class="fa fa-search"></i>
                  </a>
                <a href="{{ url('/admin/claims/'.$claim->id.'/edit') }}" type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Editar Reclamo">
                    <i class="fa fa-pencil-square-o"></i>
                  </a>
                    @csrf @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Eliminar Reclamo">
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
  <div class="text-center">{{ $claims->links() }} </div>
@endsection
