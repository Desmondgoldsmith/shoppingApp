@section('title')
    View Product
@endsection
@extends('adminIncludes.navbar')

@section('content')
     <!-- Content Wrapper. Contains page content -->
@include('adminIncludes.header')  
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-11">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Bordered Table</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 2px">#ID</th>
                  <th>Image</th>
                  <th>Product Name</th>
                  <th >Product Category</th>
                  <th>Product Price</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>      
                @foreach ($products as $product)
                <tr>
                  <td>{{$product->id}}</td>
                  <td>
                    <img src="/storage/productImages/{{$product->productImage}}" style="height:60px;width:60px" class="img-circle elevation-2" alt="{{$product->productImage}}">
                    </td>
                  <td>{{$product->productName}}</td>
                  <td>{{$product->productCategory}}</td>
                  <td>GHc {{$product->productPrice}}</td>
                  <td><a href="{{URL('/edit')}}" class="btn btn-info"> <i class="nav-icon fas fa-edit "></i></a><a href="{{URL('#')}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>              
          
                
                </tr>
                @endforeach
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
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
<!-- /.row -->
</div><!-- /.container-fluid -->
</section>
@endsection