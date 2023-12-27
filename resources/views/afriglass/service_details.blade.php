@extends('layouts.afriglass')
@section('main-content')
<main id="main">
      <!-- ======= Intro Single ======= -->
      <section class="intro-single">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-8">
              <div class="title-single-box">
                <h1 class="title-single">{{$service->name}}</h1>
              </div>
            </div>
            <div class="col-md-12 col-lg-4">
              <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="#">Home</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Services
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section><!-- End Intro Single-->
  
      <!-- ======= About Section ======= -->
      <section class="section-about">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
                <img src="/afriglass/assets/img/services/{{$service->image}}" alt="Image" width="600" height="800">
            </div>
            <div class="col-md-6">
                <div class="container mt-5">
                    <div class="jumbotron">
                      <h1 class="display-4">Welcome to AfriGlass & Aluminium Solutions</h1>
                      <p class="lead">Elegance at its best!</p>
                    </div>
                  
                    <div class="card mb-4">
                      <div class="card-body">
                        <h2>{{$service->name}}</h2>
                        <p>{{$service->description}}</p>
                      </div>
                    </div>
                  </div>                  
            </div>
          </div>
        </div>
      </section>
    </main><!-- End #main -->  
@endsection