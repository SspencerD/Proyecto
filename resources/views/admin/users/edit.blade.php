@extends('layouts.work')

@section('title', ' ICSA|Edición de usuarios')

@section('contenido')

<div class="app-page-title">
  <div class="page-title-wrapper">
    <div class="page-title-heading">
      <div class="page-title-icon">
        <i class="fa fa-pencil-square-o aria-hidden='true' text-success">
        </i>
      </div>
      <div>Edición de usuario
        <div class="page-title-subheading">¿Cometimos un error? , Arreglemoslo!.
        </div>
      </div>
    </div>
  </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
  @endif

  <div class="tab-content">
    <div class="tab-pane tabs-animation fade show active"  role="tabpanel">
      <div class="main-card mb-3 card">
        <div class="card-body">
          <h5 class="card-title">Editemos ese usuario..</h5>
          <form  method="post" action="{{ '/admin/users/'.$users->id.'/edit' }}" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputEmail4">Nombre</label>
                    <input type="text" class="form-control"  name="name" value="{{ old('name',$users->name ) }}"placeholder="Gabriel" >
                      </div>
                    <div class="form-group col-md-4">
                        <label for="inputEmail4">Apellido</label>
                        <input type="text" class="form-control"   name="lastname" value="{{ old('lastname',$users->lastname )}}"placeholder="Lopéz">
                      </div>
                  <div class="form-group col-md-4">
                    <label for="inputEmail4">Correo</label>
                    <input type="email" readonly class="form-control"  placeholder="example@example.com" name="email" value="{{ old('email',$users->email) }}">
                  </div>
                  <div class="form-group col-md-4">
                      <label for="inputAddress">Telefono</label>
                  <input type="phone" class="form-control"  name="phone" placeholder="+5698215123" value="{{ old('phone',$users->phone) }}">
                       </div>
                  <div class="form-group col-md-4">
                      <label for="inputState">Tipo de usuario</label>
                      <select id="inputState" class="form-control">
                        <option selected value="">Elegir...</option>
                        @foreach($roles as $rol)
                      <option value="{{$rol->roles}}"  @if($rol->roles == old('roles',$users->roles )) selected @endif>{{$rol->roles}}</option>
                      @endforeach
                      </select>
                    </div>
                  </div>
                   <div class="form-row">
                  <div class="form-group col-md-4">
                  <label for="inputAddress">Dirección</label>
                  <input type="text" class="form-control"  name="address" placeholder="jorge caceres 220" value="{{ old('address',$users->address ) }}">
                   </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">País</label>
                        <select id="select-country" class="form-control">
                          <option selected>Seleccione País...</option>
                          @foreach($paises as $pais)
                        <option value="{{$pais->id}}" @if($pais->id == old('country_id',$users->country_id )) selected @endif>
                            {{ $pais->name }}</option>
                        @endforeach
                        </select>
                      </div> <div class="form-group col-md-4">
                          <label for="inputState">Región</label>
                          <select id="select-region" class="form-control">
                          <option value="{{ old('region_id',$users->region_id ) }}" selected>Seleccione una Región...{{old($users->region->name) }}</option>
                          </select>
                        </div> <div class="form-group col-md-4">
                            <label for="inputState">Ciudad</label>
                            <select id="select-city" class="form-control">
                            <option  value="{{ old('city_id',$users->city_id ) }}" selected>Seleccione una Ciudad...</option>
                            </select>
                          </div> <div class="form-group col-md-4">
                    <label for="inputState">Comuna</label>
                    <select id="select-province" class="form-control">
                    <option value="{{ old('province_id',$users->province_id) }}" selected>Seleccione Comuna...</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputAddress">Rut</label>
                    <input type="text"  id="rut" required oninput="checkRut(this)" class="form-control" name="dni" placeholder="1.111.111.-1"
                     value="{{ old('dni',$users->dni) }}">
                         </div>
                         <div class="form-group col-md-4">
                            <label for="inputAddress">Razón Social</label>
                         <input type="text" class="form-control" name="reasonsocial"  placeholder="Mi-Mu Ltda" value="{{ old('reasonsocial',$users->raesonsocial) }}">
                             </div>
                             <div class="form-group col-md-4">
                                <label for="inputAddress">Giro comercial</label>
                                <input type="text" class="form-control"  name="activity" placeholder="Ventas de productos carnicos" {{ old('activity',$users->activity) }}>
                                 </div>
                                 <div class="form-group col-md-4">
                                    <label for="inputAddress">Vendedor</label>
                                    <input type="text" class="form-control"  name="saleman" placeholder="Jorge lianza" {{ old('saleman',$users->saleman) }}>
                                     </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="input-password" class="control-label">Contraseña</label>
                        <div class="col-sm-10">
                        <input id="password" readonly type="password" value="{{ old('password',$users->password) }}" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="input-confirm" class="control-label">Confirme su contraseña</label>
                        <div class="col-sm-10">
                        <input id="password-confirm" readonly type="password" value="{{ old('password',$users->password) }}" class="form-control" name="password_confirmation" required autocomplete="new-password">
    
                        </div>
                    </div>
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" name="creditactive">
                    <label class="form-check-label" for="gridCheck">
                     ¿Activar credito?
                    </label>
                  </div>
        
                </div>
            <button class="mb-2 mr-2 btn btn-success">Editar usuario</button>
            <a href="{{ url('/admin/users') }}" class="mb-2 mr-2 btn btn-danger">Cancelar</a>
          </form>
        </div>
      </div>
    </div>
  </div>
   <script src="/js/dashboard/country.js"></script>
  @endsection

 



