@section('title')
    View Slider
@endsection
@extends('adminIncludes.navbar')

@section('content')
    @include('adminIncludes.header') 

<!-- Main content -->
 <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-11">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">View Sliders</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th style="width: 100px">Picture</th>
                    <th>Description 1</th>
                    <th>Description 2</th>
                    <th >Action</th>
                  </tr>
                </thead>
                <tbody>
                  
                    <tr>
                    <td>1.</td>
                    <td>image</td>
                    <td>
                        Update software
                    </td>
                    <td>Update software</td>
                    <td><a href="#" class="btn btn-warning">Activate</a><a href="#" class="btn btn-info"> <i class="nav-icon fas fa-edit "></i></a><a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td>1.</td>
                    <td>image</td>
                    <td>
                        Update software
                    </td>
                    <td>Update software</td>
                    <td><a href="#" class="btn btn-warning">Activate</a><a href="#" class="btn btn-info"> <i class="nav-icon fas fa-edit "></i></a><a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td>1.</td>
                    <td>image</td>
                    <td>
                        Update software
                    </td>
                    <td>Update software</td>
                    <td><a href="#" class="btn btn-warning">Activate</a><a href="#" class="btn btn-info"> <i class="nav-icon fas fa-edit "></i></a><a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td></tr>
                  <tr>
                    <td>1.</td>
                    <td>image</td>
                    <td>
                        Update software
                    </td>
                    <td>Update software</td>
                    <td><a href="#" class="btn btn-warning">Activate</a><a href="#" class="btn btn-info"> <i class="nav-icon fas fa-edit "></i></a><a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
          @endsection