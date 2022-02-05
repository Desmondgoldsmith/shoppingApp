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
                  @foreach ($sliders as $slider)
                      
                    <tr>
                    <td>
                      {{$slider->id}}</td>
                    <td>
                      <img src="/storage/sliderImages/{{$slider->sliderImage}}" style="height:80px;width:80px" class="img-circle elevation-2" alt="{{$slider->sliderImage}}">
                    </td>
                    <td>{{$slider->sliderDescription1}}</td>
                    <td>
                        {{$slider->sliderDescription2}}
                    </td>
                    <td><a href="{{Url('updateSlider/'.$slider->id)}}" class="btn btn-info"> <i class="nav-icon fas fa-edit "></i></a><a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                    @endforeach
                  </tr>
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