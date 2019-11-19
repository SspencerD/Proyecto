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
          <div class="btn-actions-pane-right">
          </div>
        </div>
      <thead>
        <tr>
            <th class="text-center">Id</th>
            <th class='text-center'>descripción</th>
            <th class='text-center'>Fecha de registro</th>
            <th class='text-center'>Codigo producto</th>
            <th class='text-center'>Producto</th>
            <th class='text-center'>Detalle</th>
            <th class='text-center'>Estado</th>
            <th class='text-center'>Acciones</th>
        </tr>
      </thead>
      <tbody>
          <tr>
              <td class="text-center text-muted">#1</td>
              <td>
                <div class="widget-content p-0">
                  <div class="widget-content-wrapper">
                    <div class="widget-content-left mr-3">
                    </div>
                    <div class="widget-content-left flex2">
                      <div class="widget-heading">Producto no conforme </div>
                      <div class="widget-subheading opacity-7">Viña San Pedro de Tarapaca S.A</div>
                    </div>
                  </div>
                </div>
              </td>
              <td class="text-center">30-10-2019 10:39:22</td>
              <td class="text-center"><b>VSP1020310</b></td>
              <td class="text-center">Tapón 38/24 Superior Racimo </td>
              <td class="text-center">Tapón no viene con descripción solicitada...</td>
              <td class="text-center"><span class="badge badge-warning">Pendiente</span></td>
              <td class="text-center">
              <div class="btn-group" role="group" aria-label="Basic example">
                <form method="post" action="">
                <a href="{{ '/claims/show' }}" type="button" class="btn btn-info btn-sm" data-toggle="tooltip"
                   data-placement="top" title="Ver Reclamo" target="_blank">
                    <i class="fa fa-search"></i>
                  </a>
                  <a href="{{ url('#') }}" type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Editar Reclamo">
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
          <tr>
              <td class="text-center text-muted">#2</td>
              <td>
                <div class="widget-content p-0">
                  <div class="widget-content-wrapper">
                    <div class="widget-content-left mr-3">
                    </div>
                    <div class="widget-content-left flex2">
                      <div class="widget-heading">Corcho sin humectación </div>
                      <div class="widget-subheading opacity-7">Viña Koyle S.A</div>
                    </div>
                  </div>
                </div>
              </td>
              <td class="text-center">30-10-2019 10:39:22</td>
              <td class="text-center"><b>KOY123492</b></td>
              <td class="text-center">Tapón 49/24  Extra Super Caballo loco<span class="badge badge-primary" data-toggle="tooltip" data-placement="top" title="NDTech">ND</span></td></td>
              <td class="text-center">Corcho viene bajo los porcentajes establecidos...</td>
              <td class="text-center"><span class="badge badge-danger">no asignada</span></td>
              <td class="text-center">
              <div class="btn-group" role="group" aria-label="Basic example">
                <form method="post" action="">
                  <a href="#" type="button" class="btn btn-info btn-sm" data-toggle="tooltip"
                   data-placement="top" title="Ver Reclamo" target="_blank">
                    <i class="fa fa-search"></i>
                  </a>
                  <a href="{{ url('#') }}" type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Editar Reclamo">
                    <i class="fa fa-pencil-square-o"></i>
                  </a>
                  {{ csrf_field() }} {{ method_field('DELETE') }}
                  <button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Eliminar Reclamo">
                    <i class="fa fa-trash"></i>
                  </button>
                </form>
                </div>
              </td>
          </tr>
          <tr>
              <td class="text-center text-muted">#3</td>
              <td>
                <div class="widget-content p-0">
                  <div class="widget-content-wrapper">
                    <div class="widget-content-left mr-3">
                    </div>
                    <div class="widget-content-left flex2">
                      <div class="widget-heading">Niveles de TCA altos </div>
                      <div class="widget-subheading opacity-7"><span class="badge badge-success" data-toggle="tooltip" data-placement="top" title="Cliente importante"><i class="fas fa-award"></i></span>Viña Concha y toro S.A</div>
                    </div>
                  </div>
                </div>
              </td>
              <td class="text-center">30-10-2019 10:39:22</td>
              <td class="text-center"><b>CYT39230310</b></td>
              <td class="text-center">Tapón 38/24 Superior Casillero </td>
              <td class="text-center">Niveles muy altos de tca en el corcho...</td>
              <td class="text-center"><span class="badge badge-success">Solucionado</span></td>
              <td class="text-center">
              <div class="btn-group" role="group" aria-label="Basic example">
                <form method="post" action="">
                  <a href="#" type="button" class="btn btn-info btn-sm" data-toggle="tooltip"
                   data-placement="top" title="Ver Reclamo" target="_blank">
                    <i class="fa fa-search"></i>
                  </a>
                  <a href="{{ url('#') }}" type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Editar Reclamo">
                    <i class="fa fa-pencil-square-o"></i>
                  </a>
                  {{ csrf_field() }} {{ method_field('DELETE') }}
                  <button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Eliminar Reclamo">
                    <i class="fa fa-trash"></i>
                  </button>
                </form>
              </div>
              </td>
          </tr>
      </tbody>
    </table>
  </div>
</div>
  {{--   <div class="text-center">{{ $products->links() }} </div> --}}
@endsection