@extends('home')
@section('styles')
 <!-- DataTables -->
 <link rel="stylesheet" href="/admin-site/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
 <link rel="stylesheet" href="/admin-site/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
 <link rel="stylesheet" href="/admin-site/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection
@section('main-content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>DataTables</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">DataTables</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Projects List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SNO</th>
                  <th>Added On</th>
                  <th>Name</th>
                  <th>Location</th>
                  <th>Description</th>
                  <th>Youtube Link</th>
                  <th>Manage</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($projects as $project)
                  <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$project->created_at}}</td>
                    <td>{{$project->name}}</td>
                    <td>{{$project->location}}</td>
                    <td>{{$project->description}}</td>
                    <td><a href="{{$project->youtube_link}}">{{$project->youtube_link}}</a></td>
                    <td>
                      <a href="">Edit</a>
                      <a href="">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>SNO</th>
                  <th>Added On</th>
                  <th>Name</th>
                  <th>Location</th>
                  <th>Description</th>
                  <th>Youtube Link</th>
                  <th>Manage</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
@endsection
@section('scripts')
<!-- DataTables  & Plugins -->
<script src="/admin-site/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/admin-site/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/admin-site/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/admin-site/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/admin-site/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/admin-site/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/admin-site/plugins/jszip/jszip.min.js"></script>
<script src="/admin-site/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/admin-site/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/admin-site/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/admin-site/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/admin-site/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
  @endsection