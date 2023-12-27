@extends('layouts.afriglass')
@section('main-content')
<main id="main">
      <!-- ======= Intro Single ======= -->
      <section class="intro-single">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-8">
              <div class="title-single-box">
                <h1 class="title-single">Our Services</h1>
              </div>
            </div>
            <div class="col-md-12 col-lg-4">
              <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="#">Home</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Our Services
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section><!-- End Intro Single-->
  
      <!-- ======= About Section ======= -->
      <section class="property-grid grid">
        <div class="container">
          <div class="row">
            @foreach($services as $service)
            <div class="col-md-4">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="/afriglass/assets/img/services/{{$service->image}}" alt="Image" width="400" height="600">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="/services/{{$service->slug}}">{{$service->name}}
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">{{$service->location}}</span>
                      </div>
                    </div>
                    <div class="card-footer-a">
                      <a href="/services/{{$service->slug}}">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4>View Details</h4>
                        </li>
                      </ul>
                    </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section><!-- End Property Grid Single-->
    </main><!-- End #main -->  
@endsection