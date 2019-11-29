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
      <div>Reclamo <!--nombre del reclamo-->
      </div>

    </div>
    <div class="page-title-actions">
      <div class="d-inline-block dropdown">
      </div>
    </div>
  </div>
  <div class="main-card mb-3 card">    
  </div>
  <form>
      
        <div class="row">
          <div class="col-md-2">
              <label for="exampleFormControlSelect2">Estado</label>
              <select class="form-control" id="exampleFormControlSelect2">
                <option>Asignado</option>
                <option>Revisión</option>
                <option>Bloqueado</option>
                <option>Entregando</option>
                <option>Finalizado</option>
              </select>
            </div>
          </div>
          <br><br><br>
            <fieldset>
      <div class="row">
        <div class="col-md-4">
          <label for="exampleFormControlInput1">Nombre</label>
          <input type="text" class="form-control" readonly id="exampleFormControlInput1" name="text"  value="Andrea">
        </div>
        <div class="col-md-4">
                <label for="exampleFormControlInput1">Apellido</label>
                <input type="text" class="form-control" readonly id="exampleFormControlInput1" name="lastname" value="Silvano">
              </div>
              <div class="col-md-4">
                    <label for="exampleFormControlInput1">Razón Social</label>
                    <input type="text" class="form-control" readonly id="exampleFormControlInput1" name="raesonsocial" value="Viña Concha y toro S.A">
                  </div>
                </div>
            </fieldset> <br>
            <fieldset>
               
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
   
     <i class="fas fa-file-archive" style="size: 3em"></i>
        <label> Documentos adjuntos</label>
        <div class="jumbotron">
            <i class="fas fa-file-archive x5"></i>documento1
            <i class="fas fa-file-archive x5"></i>documento2

        </div>
        <div class="text-center">
        <button class="btn btn-success text-center" type="submit"> Guardar</button>
    </div>
    </div>
      </form>
</div>
@endsection