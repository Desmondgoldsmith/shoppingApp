@section('title')
    category List
@endsection

@extends('adminIncludes.navbar')
@section('content')
@include('adminIncludes.header') 
<table class="table table-bordered">
        <thead>
            <tr>
              <th scope="col">Number</th>
              <th scope="col">Category Name</th>
              <th scope="col">action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Rice</td>
              <td><a href="#" class="btn btn-info"> <i class="nav-icon fas fa-edit "></i></a><a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>              
            </tr>
            <tr>
              <th scope="row">1</th>
              <td>Rice</td>
              <td><a href="#" class="btn btn-info"> <i class="nav-icon fas fa-edit "></i></a><a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>              
            
            </tr>
            <tr>
              <th scope="row">1</th>
              <td>Rice</td>
              <td><a href="#" class="btn btn-info"> <i class="nav-icon fas fa-edit "></i></a><a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>              
            
            </tr>
          </tbody>
      </table>
    </div>
</section>
@endsection