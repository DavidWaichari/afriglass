@extends('layouts.afriglass')
@section('styles')
<style>

</style>
@endsection
@section('main-content')
<main id="main">
  <!-- ======= Intro Single ======= -->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">{{$project->name}}</h1>
            <span class="color-text-a">{{$project->location}}</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="property-grid.html">Projects</a>
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section><!-- End Intro Single-->

  <!-- ======= Property Single ======= -->
  <section class="property-single nav-arrow-b">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div id="property-single-carousel" class="swiper">
            <div class="swiper-wrapper">
              @foreach($project->getMedia('project_photos') as $photo)
                <div class="carousel-item-b swiper-slide">
                  <img src="{{ $photo->getUrl() }}" alt="Photo"  class="img-a img-fluid" width="600" height="800">
                </div>  
              @endforeach
            </div>
          </div>
          <div class="property-single-carousel-pagination carousel-pagination"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 justify-content-center">
          <div class="row justify-content-between">
            <div class="col-md-12 col-lg-12 section-md-t3">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Project Description</h3>
                  </div>
                </div>
              </div>
              <div class="property-description">
                <p class="description color-text-a">
                  {{$project->description}}
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-video-tab" data-bs-toggle="pill" href="#pills-video" role="tab" aria-controls="pills-video" aria-selected="true">Video Footage</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
              @if ($videoId != '')
              <iframe src="https://www.youtube.com/embed/{{$videoId}}" width="50%" height="460" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>   
              @else
               <h4>No Footage Found</h4>   
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Property Single-->
</main><!-- End #main -->
@endsection
@section('scripts')
<script>
  
</script>
@endsection