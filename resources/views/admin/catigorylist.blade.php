@section('title')
    category List
@endsection

@extends('adminIncludes.navbar')
@section('content')
@include('adminIncludes.header') 

@if(Session::has('status'))
 <div class="alert alert-success">
   {{Session::get('status')}}   
</div>  
@endif

<table class="table table-bordered">
        <thead>
            <tr>
              <th scope="col">Number</th>
              <th scope="col">Category Name</th>
              <th scope="col">action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
               <tr>
              <th scope="row">{{$category->id}}</th>
              <td>{{$category->category}}</td>
              <td><a href="{{URL('editCategory/'.$category->id)}}" class="btn btn-info"> <i class="nav-icon fas fa-edit "></i></a><a href="{{URL('deleteCategory/'.$category->id)}}" class="btn btn-danger" onclick="return confirm('Are You Sure You Want Delete?')"><i class="fas fa-trash-alt"></i></a></td>              
            </tr> 
            @endforeach
            
          </tbody>
      </table>
    </div>
</section>
@endsection