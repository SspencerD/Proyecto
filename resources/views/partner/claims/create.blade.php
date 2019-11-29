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
<<<<<<< HEAD
    <form action="" method="POST">
            {{ csrf_field() }}
        <div class="row">
      <div class="col-12">
          <label for="exampleFormControlInput1">Titulo del reclamo</label>
        <input type="text" class="form-control" name="title" id="" {{ old('title') }}placeholder="Titulo del reclamo">
      </div>
    </div>
=======
      <div>Realizar reclamo
      </div>
>>>>>>> fbbf775543462cb6dd1e3b41b30825a8ee22643c

    </div>
    <div class="page-title-actions">
      <div class="d-inline-block dropdown">
      </div>
    </div>
  </div>
<<<<<<< HEAD
  <div class="main-card mb-3 card">
  </div>
  @if(session()->has('notificacion'))
  <div class="alert alert-success" role="alert">{{ session('notificacion') }}</div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
            <li>{{$error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

=======
  <div class="main-card mb-3 card">    
  </div>
  <form>
      <div class="row">
          <div class="col-md-6">
              <label for="nombre">Nombre del reclamo</label>
              <input type="text" class="form-control" id="nombre" name="title" placeholder=" ej: Problemas de humectación">
          </div>
      </div>
>>>>>>> fbbf775543462cb6dd1e3b41b30825a8ee22643c
      <fieldset>
          <legend>Datos personales</legend>
      <div class="row">
        <div class="col-md-4">
          <label for="exampleFormControlInput1">Nombre</label>
<<<<<<< HEAD
        <input type="text" class="form-control" readonly id="nombreid" name="name"  value="{{ Auth::user()->name }}">
        </div>
        <div class="col-md-4">
                <label for="exampleFormControlInput1">Apellido</label>
        <input type="text" class="form-control" readonly id="apellidoid" name="lastname" value="{{ Auth::user()->lastname }}">
              </div>
              <div class="col-md-4">
                    <label for="exampleFormControlInput1">Razón Social</label>
              <input type="text" class="form-control" readonly id="razonid" name="raesonsocial" value="{{ Auth::user()->raesonsocial }}">
                  </div>
                  <div class="col-md-4">
                    <label for="exampleFormControlInput1">Cargo</label>
                  <input type="text" class="form-control"  id="cargoid" name="cargo" value="{{ old('cargo') }}" placeholder="Jefa control calidad">
=======
          <input type="text" class="form-control" readonly id="exampleFormControlInput1" name="name"  value="Andrea">
        </div>
        <div class="col-md-4">
                <label for="exampleFormControlInput1">Apellido</label>
                <input type="text" class="form-control" readonly id="exampleFormControlInput1" name="lastname" value="Silvano">
              </div>
              <div class="col-md-4">
                    <label for="exampleFormControlInput1">Razón Social</label>
                    <input type="text" class="form-control" readonly id="exampleFormControlInput1" name="raesonsocial" value="Viña Concha y toro S.A">
>>>>>>> fbbf775543462cb6dd1e3b41b30825a8ee22643c
                  </div>
                </div>
            </fieldset> <br>
            <fieldset>
<<<<<<< HEAD

                <legend>Causantes</legend>
                <div class="row">
        <div class="col-md-4">
          <label for="exampleFormControlSelect1">Hallazgo</label>
          <select class="form-control" name="cause" id="exampleFormControlSelect1">
            <option value="">Seleccione Defecto</option>
            @foreach ($cause as $causes)
          <option value="{{ $causes->id }}">{{ $causes->name }}</option>
          @endforeach
          </select>
        </div>
        <div class="col-md-4">
          <label for="exampleFormControlSelect1">Tipo de defecto</label>
          <select class="form-control" name="reason" id="exampleFormControlSelect1">
            <option value="1">Inocuidad</option>
            <option value="2">Legalidad</option>
            <option value="3">indices altos</option>
          </select>
        </div>
                </div>
        <legend>Producto</legend>
        <div class="row">
            <div class="col-md-4">
                <label for="exampleFormControlSelect2">Categoria</label>
                <select class="form-control" name="category" id="exampleFormControlSelect2">
                  <option value="">Seleccione Categoria </option>
                  @foreach ($category as $categories)
                <option value="{{ $categories->id}}">{{$categories->name}}</option>
                @endforeach
                </select>
              </div>
        <div class="col-md-4">
          <label for="exampleFormControlSelect2">Producto</label>
          <select class="form-control" name="product" id="exampleFormControlSelect2">
            <option value="">Seleccione producto</option>
            @foreach($products as $product)
          <option value="{{$product->id}}">{{$product->name}}</option>
          @endforeach
          </select>
        </div>
      </div>
     <div class="row">
        <div class="col-md-4">
            <label for="exampleFormControlInput1">Lote</label>
            <input type="text" class="form-control"  id="loteid" name="lote" {{ old('lote') }} placeholder="OF12039">
          </div>
          <div class="col-md-4">
              <label for="exampleFormControlInput1">Cantidad despachada</label>
              <input type="number" class="form-control"  name="qty_delivery" {{ old('qty_delivery') }}placeholder="100000">
            </div>
            <div class="col-md-4">
                <label for="exampleFormControlInput1">Cantidad reclamada</label>
                <input type="number" class="form-control"  name="qty_claim" {{ old('qty_claim') }} placeholder="90000">
              </div>
        <div class="col-md-12">
          <label for="exampleFormControlTextarea1">Detalle su reclamo</label>
          <textarea class="form-control"  name="description" id="exampleFormControlTextarea1" rows="3">{{ old('description') }}</textarea>
        </div>
     </div>

{{--
=======
               
                <legend>Causantes</legend>
                <div class="row">
        <div class="col-md-4">
          <label for="exampleFormControlSelect1">Motivo de reclamo</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>Seleccione motivo.</option>
            <option>Falta de humectación</option>
            <option>Altos niveles de TCA</option>
            <option>Mezcla en el producto</option>
            <option>Producto no deseado</option>
            <option>Cerigrafia mal realizada</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="exampleFormControlSelect2">Producto afectado</label>
          <select class="form-control" id="exampleFormControlSelect2">
            <option>44/24 Primera </option>
            <option>38/24 Superior</option>
            <option>42/35 Flor NDTech</option>
            <option>42/24 Neutrocork</option>
            <option>38/25 Neutrocork</option>
          </select>
        </div>
     </div>
     <div class="row">
        <div class="col-md-12">
          <label for="exampleFormControlTextarea1">Detalle su reclamo</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
     </div>
   
   
>>>>>>> fbbf775543462cb6dd1e3b41b30825a8ee22643c
        <label> Si lo desea puede cargar una imagen o documento</label>
        <div class="col-md-offset-6">
            <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">examinar...</label>
                </div>
                <h3><span class="badge badge-info">Solo archivos tipo JPG , PNG , SVG o PDF que no superen los 5mb</span></h3>
<<<<<<< HEAD
        </div> <br> --}}
        <br>
=======
        </div> <br>
>>>>>>> fbbf775543462cb6dd1e3b41b30825a8ee22643c
        <div class="text-center">
        <button class="btn btn-success text-center" type="submit"> Enviar</button>
        <button class="btn btn-danger text-center" type="reset">Borrar</button>
    </div>
    </div>
      </form>
</div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> fbbf775543462cb6dd1e3b41b30825a8ee22643c
