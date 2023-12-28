@extends('home')
@section('main-content')
<div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Delete Project</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this project</p>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <form action="/admin/projects/{{$project->id}}" method="POST">
            @csrf 
            @method('DELETE')
            <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Project Details</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Project Details</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card card-solid">
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-sm-6">
            <h3 class="d-inline-block d-sm-none">{{$project->name}}</h3>
            <div class="col-12">
                @if ($project->getFirstMediaUrl('featured_photos') != '')
                <img src="{{$project->getFirstMediaUrl('featured_photos') }}" alt="" class="img-a img-fluid" width="600" height="800">
                @else
                <img src="/afriglass/assets/img/property-1.jpg" alt="" class="img-a img-fluid" width="600" height="800">
                @endif
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <h2>Project Title</h2>
            <h3 class="my-3">{{$project->name}}</h3>
            <hr>
            <h2>Project Date</h2>
            <h3 class="my-3">{{ Carbon\Carbon::parse($project->project_date)->format('j M, Y') }}</h3>
            <hr>
            <h4>Location</h4>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-default text-center active">
                  <input type="radio" name="color_option" id="color_option_a1" autocomplete="off" checked="">
                  {{$project->location}}
                  <br>
                  <i class="fas fa-circle fa-2x text-green"></i>
                </label>
              </div>
            <hr>
            <h2>Description</h2>
            <p>{!!$project->description!!}</p>
            <hr>
            <h4 class="mt-3">Youtube Link</h4>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
              <label class="btn btn-default text-center">
                <input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
                <br>
                <a href="{{$project->youtube_link}}">{{$project->youtube_link}}</a>
              </label>
            </div>
            @if ($project->is_published == 'no')
            <div class="bg-red py-2 px-3 mt-4">
              <h2 class="mb-0">
                Unpublished
              </h2>
            </div>
            @else
            <div class="bg-green py-2 px-3 mt-4">
                <h2 class="mb-0">
                  Published
                </h2>
            </div>
            @endif

            <div class="mt-4">
                <a href="/admin/projects/{{$project->id}}/edit">
              <div class="btn btn-primary btn-lg btn-flat">
                <i class="fas fa-edit fa-lg mr-2"></i>
                Edit
              </div>
            </a>
              <div class="btn btn-danger btn-lg btn-flat" data-toggle="modal" data-target="#modal-default">
                <i class="fas fa-trash fa-lg mr-2"></i>
                Delete
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <nav class="w-100">
            <div class="nav nav-tabs" id="product-tab" role="tablist">
              <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Project Pictures</a>
            </div>
          </nav>
          <div class="tab-content p-3" id="nav-tabContent">
            <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
                <section class="property-grid grid">
                    <div class="container">
                      <div class="row">
                        @foreach($project->getMedia('project_photos') as $photo)
                        <div class="col-md-4">
                          <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                              <img src="{{ $photo->getUrl() }}" alt="" class="img-a img-fluid" width="600" height="800">
                            </div>
                            <div class="card-overlay">
                              <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                  <h2 class="card-title-a">
                                    
                                  </h2>
                                </div>
                                <div class="card-body-a">
                                  <div class="price-box d-flex">
                                    
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        @endforeach
                      </div>
                  </section>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
@endsection
