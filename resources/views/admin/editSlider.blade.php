@section('title')
    Update Slider
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
                <h3 class="card-title">Update Slider</h3>
              </div>
              <!-- /.card-header -->
              
           @if (Session::has('status'))
            <div class="alert alert-success">
              {{Session::get('status')}}
            </div>             
           @endif
        @if (count($errors)> 0)                
         <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>
                     {{$error}}
                </li>
              
          @endforeach
            </div>
          </ul>
               
        @endif
           {!!Form::Open(['action'=>'App\Http\Controllers\sliderController@update', 'method'=>'Post', 'enctype'=>'multipart/form-data'])!!}
            {{ csrf_field() }}    
           <div class="card-body">
               {{Form::hidden('id',$sliders->id)}}
                  <div class="form-group">
                    {{Form::label('','Slider Description 1',['for'=>'sDesc1'])}}
                    {{Form::text('sliderDescription1',$sliders->sliderDescription1,['class'=>'form-control','id'=>'sliderDescription','placeholder'=>'Enter Slider Description'])}}
                  </div>
                  <div class="form-group">
                    {{Form::label('','Slider Description 2',['for'=>'sDesc2'])}}
                    {{Form::text('sliderDescription2',$sliders->sliderDescription2,['class'=>'form-control','id'=>'sliderDescription2','placeholder'=>'Enter Slider Description'])}}
                    {{-- <label for="sDesc2">Slider Description 2</label>
                    <input type="text" class="form-control" id="sDesc2" placeholder="Enter Slider Description"> --}}
                  </div>
                  <div class="form-group">
                    {{Form::Label('','Slider Image',['for'=>'sliderrrImage'])}}
                    <div class="input-group">
                      <div class="custom-file">
                          {{Form::file('sliderImage',['class'=>'custom-file-input','id'=>'sliderImage'])}}
                        {{-- <input type="file" class="custom-file-input" id="pImage"> --}}
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
                  {{-- <button type="submit" class="btn btn-warning">Submit</button> --}}
                {{Form::submit('Update',['class'=>'btn btn-warning','id'=>'submit'])}}
                </div>
                {!!Form::close()!!}
              {{-- </form> --}}
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