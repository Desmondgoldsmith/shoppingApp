@extends('adminIncludes.navbar')
@section('content')
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content">
      {{-- <div class="container-fluid"> --}}
    <h2><b>Category</b></h2>    
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
              <td><button class="btn btn-info">edit</button><button class="btn btn-danger">delete</button></td>              
            </tr>
            <tr>
              <th scope="row">1</th>
              <td>Rice</td>
              <td><button class="btn btn-info">edit</button><button class="btn btn-danger">delete</button></td>              
            
            </tr>
            <tr>
              <th scope="row">1</th>
              <td>Rice</td>
              <td><button class="btn btn-info">edit</button><button class="btn btn-danger">delete</button></td>              
            
            </tr>
          </tbody>
      </table>
    </div>
</section>
@endsection