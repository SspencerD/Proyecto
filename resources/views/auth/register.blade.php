@extends('layouts.app')

@section('content')
<div class="col-sm-9" id="content">
    <p>Si ya estas registrado, favor ingresar en el siguiente link <a href="{{ url('/login') }}">sitio de ingreso</a>.</p>

    @if($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
        <li>{{ $error}}</li>
        @endforeach
        </ul>
      </div>
      @endif
    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ route('register') }}">
    @csrf
        <fieldset id="account">
            <legend>Sus Datos Personales</legend>
            <div class="form-group required">
                <label for="input-firstname" class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" 
                    name="name" value="{{ old('name',$name) }}" required autocomplete="name" autofocus placeholder="Roberto">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
             <div class="form-group required">
            <label for="input-lastname" class="col-sm-2 control-label">Apellido</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="input-lastname" placeholder="Hoke" value="{{ old('lastname') }}" name="lastname">
            </div>
          </div> 
            <div class="form-group required">
                <label for="input-email" class="col-sm-2 control-label">E-Mail</label>
                <div class="col-sm-10">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                    name="email" value="{{ old('email',$email) }}" required autocomplete="email" placeholder="example@example.com">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
             <div class="form-group required">
            <label for="input-telephone" class="col-sm-2 control-label">Telefono</label>
            <div class="col-sm-10">
            <input type="tel" class="form-control" id="input-telephone"
             placeholder="Telephone" value="{{ old('phone') }}" name="phone">
            </div>
          </div>
        </fieldset>
        <fieldset id="address">
          <legend>Dirección</legend>
          <div class="form-group required">
            <label for="input-address-1" class="col-sm-2 control-label">Direccion </label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id='address' placeholder="dirección" name="address" value="{{ old('address') }}">
            </div>
          </div>
          <div class="form-group required">
            <label for="input-country" class="col-sm-2 control-label">Pais</label>
            <div class="col-sm-10">
              <select  id="select-country" name="country" class="form-control {{$errors->has('country_id')? 'is-valid' : ''}}">
                <option value="">Seleccione un pais</option>
               @foreach($paises as $country)
              <option value="{{$country->id}}" {{ old('country') }}>
              {{ $country->name }}
              </option>
              @endforeach
              </select>
              
              @if ($errors->has('country_id'))
                  <span class="invalid-feedback" role="alert">
                       <strong>{{ $errors->first('country_id') }}</strong>
                   </span>
               @endif 
            </div>
          </div>
          <div class="form-group required">
            <label for="region" class="col-sm-2 control-label">Región</label>
            <div class="col-sm-10">
              <select class="form-control" id="select-region" name="region">
              <option value="{{ old('region_id') }}">Selccione una región</option>
              </select>
            </div>
            @if ($errors->has('region_id'))
            <span class="invalid-feedback" role="alert">
                 <strong>{{ $errors->first('region_id') }}</strong>
             </span>
         @endif
          </div>
          <div class="form-group required">
            <label for="city" class="col-sm-2 control-label">Ciudad</label>
            <div class="col-sm-10">
              <select class="form-control" id="select-city" name="city">
              <option value="">Seleccione una ciudad </option>
            </select>
            </div>
            @if ($errors->has('city_id'))
            <span class="invalid-feedback" role="alert">
             <strong>{{ $errors->first('city_id') }}</strong>
             </span>
           @endif
          </div>
          <div class="form-group required">
              <label for="province" class="col-sm-2 control-label">Comuna</label>
              <div class="col-sm-10">
                <select class="form-control" id="select-province" name="province">
                <option value="">Seleccione una comuna</option>
              </select>
              </div>
              @if ($errors->has('province_id'))
              <span class="invalid-feedback" role="alert">
                   <strong>{{ $errors->first('province_id') }}</strong>
               </span>
           @endif
            </div>
        </fieldset> 
        <div class="form-group required">
            <label for="" class="col-sm-2 control-label">¿Eres una Empresa?</label>
            <div class="col-sm-10">
              <input type="button" class="form-control" id="yes-company" value="Si" onclick="mostrar()">
              <input type="button" class="form-control" id="no-company" value="No" onclick="ocultar()">
            </div>
          </div>
          <div id="empresa" style="display:none">
        <fieldset>
          <legend>Datos de empresa</legend>
          <div class="form-group required">
              <label for="input-lastname" class="col-sm-2 control-label">Rut</label>
              <div class="col-sm-10">
              <input type="dni" class="form-control" id="rut" required oninput="checkRut(this)" value="{{ old('dni') }}" placeholder="1.111.111-1" name="dni">
              </div>
            </div>
            <div class="form-group required">
                <label for="input-lastname" class="col-sm-2 control-label">Razón Social</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="input-lastname" placeholder="Secunda moris"
                 name="raesonsocial" value="{{ old('raesonsocial') }}">
                </div>
              </div>
              <div class="form-group required">
                  <label for="input-lastname" class="col-sm-2 control-label">Giro</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-lastname" placeholder="Venta de licores 
                  "name="activity" value="{{ old('activity') }}">
                  </div>
                </div>
        </fieldset>
      </div>
            <fieldset>
                <legend>Contraseña</legend>
                <div class="form-group required">
                    <label for="input-password" class="col-sm-2 control-label">Contraseña</label>
                    <div class="col-sm-10">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                </div>
                <div class="form-group required">
                    <label for="input-confirm" class="col-sm-2 control-label">Confirme su contraseña</label>
                    <div class="col-sm-10">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                    </div>
                </div>
            </fieldset>
            <!-- <div class="buttons">
          <div class="pull-right">He leido concientemente y acepto<a class="agree" href="#"><b>Politica de privacidad</b></a>
            <input type="checkbox" value="1" name="agree">
            &nbsp; -->
            <input type="submit" class="btn btn-primary" value="Registrarse">
</div>
</div>
</form>
</div>
</div>
</div>
<script src="{{ asset('/js/register.js') }}"></script>
@endsection

