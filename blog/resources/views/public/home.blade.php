@extends('layout.main')

@section("title", "Blog Geek")
@section('content')



<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active bg-dark" style="height: 400px; background-image: url(/img/background-1.jpg);background-size: cover;background-position-y: -60px; background-repeat: no-repeat;">
        <div class="d-flex justify-content-center">
          {{-- <img src="img/background-1-1-2.png" class="d-block bg-dark" height="400px" alt="..."> --}}
        </div>
        <div class="carousel-caption d-none d-md-block">
          <h5>Lycoris Recoil</h5>
          <p>Chisato é a agente mais forte de todos os tempos na Lycoris, ao lado da talentosa mas misteriosa Takina.</p>
        </div>
      </div>
      <div class="carousel-item">
        {{-- <img src="img/background-2.jpg" class="d-block w-100 bg-dark" height="400px" alt="..."> --}}
        <div style="height: 400px; background-image: url(/img/background-5.jpg);background-size: cover;background-position-y: -60px; background-repeat: no-repeat;">

        </div>
        <div class="carousel-caption d-none d-md-block">
          <h5>Programdor Full-Stack</h5>
          <p>Mitos e verdades sobre os programadores full-stack</p>
        </div>
      </div>
      <div class="carousel-item">
        <div style="height: 400px; background-image: url(/img/background-6.jpg);background-size: cover;background-position-y: -60px; background-repeat: no-repeat;">
        <div class="carousel-caption d-none d-md-block">
          <h5>Grande Muralha da China</h5>
          <p>uma série de fortificações feitas de pedra, tijolo, terra compactada, madeira e outros materiais.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  {{-- POSTAGEM --}}
  <div class="row">
    <div class="col-0 col-md-2 bg-tranparent"></div>
  
      @livewire('show-articles')
  
    </div>

@endsection
