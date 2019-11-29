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
    <form action="" method="POST">
            {{ csrf_field() }}
        <div class="row">
      <div class="col-12">
          <label for="exampleFormControlInput1">Titulo del reclamo</label>
        <input type="text" class="form-control" name="title" id="" value="{{old('title',$claims->title) }}" placeholder="Titulo del reclamo">
      </div>
    </div>

    </div>
    <div class="page-title-actions">
      <div class="d-inline-block dropdown">
      </div>
    </div>
  </div>
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

      <fieldset>
          <legend>Datos personales</legend>
      <div class="row">
        <div class="col-md-4">
          <label for="exampleFormControlInput1">Nombre</label>
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
                  <input type="text" class="form-control"  id="cargoid" name="cargo" value="{{ old('cargo',$claims->cargo ) }}" placeholder="Jefa control calidad">
                  </div>
                </div>
            </fieldset> <br>
            <fieldset>

                <legend>Causantes</legend>
                <div class="row">
        <div class="col-md-4">
          <label for="exampleFormControlSelect1">Hallazgo</label>
          <select class="form-control" name="cause" id="exampleFormControlSelect1">
            <option value="">Seleccione Defecto</option>
            @foreach ($causes as $cause)
          <option value="{{ $cause->id }}{{ old('cause',$claims->cause_id) }}">{{ $cause->name }}</option>
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
                  @foreach ($categories as $category)
                <option value="{{ $category->id}}">{{$category->name}}</option>
                @endforeach
                </select>
              </div>
        <div class="col-md-4">
          <label for="exampleFormControlSelect2">Producto</label>
          <select class="form-control" name="product" id="exampleFormControlSelect2">
            <option value="">Seleccione producto</option>
            @foreach($products as $product)
          <option value="{{$product->id}} {{ old('product',$claims->product_id) }}">{{$product->name}}</option>
          @endforeach
          </select>
        </div>
      </div>
     <div class="row">
        <div class="col-md-4">
            <label for="exampleFormControlInput1">Lote</label>
            <input type="text" class="form-control"  id="loteid" name="lote" value="{{ old('lote' ,$claims->lote) }}" placeholder="OF12039">
          </div>
          <div class="col-md-4">
              <label for="exampleFormControlInput1">Cantidad despachada</label>
              <input type="number" class="form-control"  name="qty_delivery" value="{{ old('qty_delivery',$claims->qty_delivery) }}" placeholder="100000">
            </div>
            <div class="col-md-4">
                <label for="exampleFormControlInput1">Cantidad reclamada</label>
                <input type="number" class="form-control"  name="qty_claim" value="{{ old('qty_claim', $claims->qty_claim ) }}" placeholder="90000">
              </div>
        <div class="col-md-12">
          <label for="exampleFormControlTextarea1">Detalle su reclamo</label>
          <textarea class="form-control"  name="description" id="exampleFormControlTextarea1" rows="3"> {{ old('description',$claims->description ) }} </textarea>
        </div>
     </div>

{{--
        <label> Si lo desea puede cargar una imagen o documento</label>
        <div class="col-md-offset-6">
            <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">examinar...</label>
                </div>
                <h3><span class="badge badge-info">Solo archivos tipo JPG , PNG , SVG o PDF que no superen los 5mb</span></h3>
        </div> <br> --}}
        <br>
        <div class="text-center">
        <button class="btn btn-success text-center" type="submit"> Enviar</button>
        <button class="btn btn-danger text-center" type="reset">Borrar</button>
    </div>
    </div>
      </form>
</div>
@endsection
