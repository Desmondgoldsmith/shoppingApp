@section('title')
    Add Product
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
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Add Product</h3>
              </div>

              @if(Session::has('status'))
                <div class="alert alert-success">
                 {{Session::get('status')}}
                </div>
              @endif
              @if(count($errors)> 0)
                <div class="alert alert-danger">
                  <ul>
                    @foreach($errors->all() as $error)
                      <li>{{$error}}</li>
                    @endforeach
                    </ul>
                  
                </div>
                 @endif

                 {!!Form::Open(['action'=>'App\Http\Controllers\productController@saveProduct', 'method'=>'POST', 'enctype'=>'multipart/form-data' ])!!}
                 {{ csrf_field() }}
                 <div class="card-body">
                  <div class="form-group">
                    <label for="productName">Product Name</label>
                 {{Form::Label('','Product Name',['for'=>'productName'])}}
                  {{Form::Text('productName','',['class'=>'form-control','id'=>'productName','placeholder'=>'Enter Product Name'])}}
                  </div>
                  <div class="form-group">
                    {{Form::Label('','Product Price',['for'=>'productPrice'])}}
                    {{Form::Text('productPrice','',['class'=>'form-control','id'=>'productPrice','placeholder'=>'Enter Product price'])}}
                   </div>
                  <div class="form-group">      
                    {{Form::Label('','Product Category',['for'=>'productCategory'])}}
                    <select class="form-control" id="productCategory" name="productCategory">
                      <option  selected="sel">Select category</option>
                          @foreach($categories as $category)  
                        <option>{{$category->category}}</option>
                      @endforeach
                      </select>
                    </div>
                  <div class="form-group">
                    {{-- <label for="pImage">Product Image</label> --}}
                    {{Form::Label('','Product Image',['for'=>'productImage'])}}
                    <div class="input-group">
                      <div class="custom-file">
                          {{Form::file('productImage',['class'=>'custom-file-input','id'=>'productImage'])}}
                        {{-- <input type="file" class="custom-file-input" id="pImage"> --}}
                        <label class="custom-file-label" for="productImage">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
            
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  {{-- <button type="submit" class="btn btn-success">Submit</button> --}}
                 {{-- {{Form::submit('submit','Save',['class'=>'btn btn-success','id'=>'submit'])}} --}}

                 {{Form::submit('Save',['class'=>'btn btn-success'])}}
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