@extends('layouts.afriglass')
@section('main-content')
<main id="main">

  <!-- ======= Intro Single ======= -->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Our Amazing Projects</h1>
            <span class="color-text-a">Grid Projects</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Projects Grid
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section><!-- End Intro Single-->

  <!-- ======= Property Grid ======= -->
  <section class="property-grid grid">
    <div class="container">
      <div class="row">
        @foreach($projects as $project)
        <div class="col-md-4">
          <a href="">
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
                    <a href="#">{{$project->name}}
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">{{$project->location}}</span>
                  </div>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                     <h4>View Details</h4>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </a>
        </div>
        @endforeach
      </div>
      <div class="row">
        <div class="col-sm-12">
          <nav class="pagination-a">
            <ul class="pagination justify-content-end">
              <span>{{$projects->links('pagination::bootstrap-5')}}</span>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section><!-- End Property Grid Single-->
</main><!-- End #main --> 
@endsection