@extends('layouts.afriglass')
@section('main-content')
   <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel swiper position-relative">

    <div class="swiper-wrapper">

      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(/afriglass/assets/img/slide-1.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Top
                      <br> Services
                    </p>
                    <h1 class="intro-title mb-4 ">
                      <span class="color-b"> Aluminium </span> 
                      <br>  Works
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">5 | Stars</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(/afriglass/assets/img/slide-2.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Top
                      <br> Services
                    </p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Window Panes </span> 
                      <br> Installation
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">5 | Stars</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(/afriglass/assets/img/slide-3.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Top
                      <br> Services
                    </p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Office </span> Glass
                      <br> Partitions
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">5 | Stars</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div><!-- End Intro Section -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="section-services section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Our Services</h2>
              </div>
            </div>
          </div>
        </div>
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
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Latest Properties Section ======= -->
    <section class="section-property section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Latest Projects</h2>
              </div>
              <div class="title-link">
                <a href="/projects">All Projects
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="property-carousel" class="swiper">
          <div class="swiper-wrapper">
            @foreach ($projects as $project)
            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  @if ($project->getFirstMediaUrl('featured_photos') != '')
                  <img src="{{$project->getFirstMediaUrl('featured_photos') }}" alt="" class="img-a img-fluid" width="600" height="800">
                  @else
                  <img src="/afriglass/assets/img/property-1.jpg" alt="" class="img-a img-fluid" width="600" height="800">
                  @endif
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="/projects/{{$project->slug}}">{{$project->name}}
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">{{$project->location}}</span>
                      </div>
                    </div>
                    <div class="card-footer-a">
                      <a href="/projects/{{$project->slug}}">
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
            </div><!-- End carousel item --> 
            @endforeach
          </div>
        </div>
        <div class="propery-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Latest Properties Section -->
    <!-- ======= Latest News Section ======= -->

  </main><!-- End #main --> 
@endsection