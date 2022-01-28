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
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="pname">Product Name</label>
                    <input type="text" class="form-control" id="pname" placeholder="Enter Product Name">
                  </div>
                  <div class="form-group">
                    <label for="pprice">Product Price</label>
                    <input type="text" class="form-control" id="pprice" placeholder="Enter Product Price">
                  </div>
                  <div class="form-group">      
                      <label for="pprice">Product Category</label>

                    <select class="form-control">
                        <option>Pcs</option>
                        <option>Books</option>
                        <option>Shoes</option>
                      </select>
                    </div>
                  <div class="form-group">
                    <label for="pImage">Product Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="pImage">
                        <label class="custom-file-label" for="pImage">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
            
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Submit</button>
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