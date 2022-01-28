@section('title')
    Add Slider
@endsection
@extends('adminIncludes.navbar')

@section('content')
     <!-- Content Wrapper. Contains page content -->
@include('adminIncludes.header')  
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Add Slider</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="sDesc1">Slider Description 1</label>
                    <input type="text" class="form-control" id="sDesc1" placeholder="Enter Slider Description">
                  </div>
                  <div class="form-group">
                    <label for="sDesc2">Slider Description 2</label>
                    <input type="text" class="form-control" id="sDesc2" placeholder="Enter Slider Description">
                  </div>
                  <div class="form-group">
                    <label for="sliderImage">Slider Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="sliderImage">
                        <label class="custom-file-label" for="sliderImage">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
            
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-warning">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

        </div>
        <!-- /.card -->
      </div>
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
@endsection