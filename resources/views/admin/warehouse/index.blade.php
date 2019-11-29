@extends('layouts.work')

@section('title', 'Reclamos')

@section('contenido')

<link rel="stylesheet" href="{{ asset('/css/bodega.less')}}">
<script src="{{ asset('/js/bodega.js') }}"></script>

<div class="app-page-title">
  <div class="page-title-wrapper">
    <div class="page-title-heading">
      <div class="page-title-icon">
            <i class="fas fa-book icon-gradient bg-happy-itmeo">
        </i>
      </div>Realizar reclamo
    </div>
    <div class="page-title-actions"></div>
</div>
<div class="cards">

        <div class="card">
          <img class="card__image" src="https://source.unsplash.com/300x225/?wave" alt="wave" />
          <div class="card-title">
            <a href="#" class="toggle-info btn">
              <span class="left"></span>
              <span class="right"></span>
            </a>
            <h2>
                Card title
                <small>Image from unsplash.com</small>
            </h2>
          </div>
          <div class="card-flap flap1">
            <div class="card-description">
              This grid is an attempt to make something nice that works on touch devices. Ignoring hover states when they're not available etc.
            </div>
            <div class="card-flap flap2">
              <div class="card-actions">
                <a href="#" class="btn">Read more</a>
              </div>
            </div>
          </div>
        </div>
      
          <div class="card">
          <img class="card__image" src="https://source.unsplash.com/300x225/?beach" alt="beach" />
          <div class="card-title">
            <a href="#" class="toggle-info btn">
              <span class="left"></span>
              <span class="right"></span>
            </a>
            <h2>
                Card title
                <small>Image from unsplash.com</small>
            </h2>
          </div>
          <div class="card-flap flap1">
            <div class="card-description">
              This grid is an attempt to make something nice that works on touch devices. Ignoring hover states when they're not available etc.
            </div>
            <div class="card-flap flap2">
              <div class="card-actions">
                <a href="#" class="btn">Read more</a>
              </div>
            </div>
          </div>
        </div>
      
      
      </div>    
      
</div>

@endsection