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
      <div class="carousel-item active">
        <img src="..." class="d-block w-100 bg-dark" height="400px" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100 bg-dark" height="400px" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100 bg-dark" height="400px" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
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

  
  <div class="row">
    <div class="col-0 col-md-2 bg-tranparent"></div>
    <div class="col-9 col-md-7 shadow py-3">

      @auth
        {{-- CARDS --}}
        <div class="my-1">
          <form  action=" {{ route('NewArticle') }} " method="post" class="">
            @csrf
            <div class="card">
              <h5 class="card-header"><input  name='title' class="form-control" type="text" placeholder="Title"></h5>
              <div class="card-body">
                <h5 class="card-title"><input name="subtitle" type="text" class="form-control" placeholder="Sub-Title"></h5>
                <textarea name="content" id="" cols="10" rows="10" class="form-control" style="resize:none" placeholder="..."></textarea>
                {{-- <a href="#" class="btn btn-primary mt-1" type="submit">Post</a> --}}
                <button type="submit" class="btn btn-primary mt-1">Post</button>
              </div>
            </div>
            {{-- <input name="user" type="text" > --}}
        </div>
        </form>
        {{-- FIM CARDS --}}    
      @endauth
          
      @livewire('card-news')


    </div>
    <div class="col-3 col-md-3 shadow sticky-top side-box ms-0 ms-md-5 " >
      <div class="height-nav"></div>
      <div class="px-3 body-side-box">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item ">
            <a class="nav-link active fw-bold text-white animation" aria-current="page" href="#">Animes</a>   
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold animation" href="#">Jogos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active fw-bold animation" aria-current="page" href="#">Cosplay</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold animation" href="#">Tech</a>
          </li>
          
        </ul>
      </div>
    </div>
  </div>

@endsection
