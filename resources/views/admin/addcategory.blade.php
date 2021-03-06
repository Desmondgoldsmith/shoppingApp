@section('title')
    Category
@endsection
@extends('adminIncludes.navbar')
@section('content')
     <!-- Content Wrapper. Contains page content -->
  {{-- <div class="content-wrapper">
    <section class="content"> --}}
      {{-- <div class="container-fluid"> --}}
        @include('adminIncludes.header') 
        {{-- <h2><b>Category</b></h2>     --}}
    @if(Session::has('status'))
        <div class="alert alert-success">
           {{Session::get('status')}}
        </div>
    @endif

      @if(count($errors) > 0)
         <div class="alert alert-danger" role="alert">
           <ul>
            @foreach ($errors->all() as $error)
               <li>{{$error}}</li>
            @endforeach
           </ul>
         </div>
      @endif  
        <div class="container bg-primary"><h3>Add Category</h3></div>
    <br>
        
    {!!Form::open(['action'=>'App\Http\Controllers\mainCategoryController@store', 'method'=>'POST'])!!}   
    {{ csrf_field() }}
    {{-- <form action=""> --}}
    <div class="container">

        <div class="form-group">
          {{Form::label('','Add Category',['for'=>'category'])}} 
          {{-- <label for="category">Add Category</label> --}}
          {{Form::text('category','',['class'=>'form-control', 'id'=>'category', 'placeholder'=>'add category', 'name'=>'category'])}}
            {{-- <input type="text" class="form-control" id="category" placeholder="add category">     --}}
          </div>
          {{Form::submit('Save',['class'=>'btn btn-primary'])}}
          {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
        
        </div>
        {!!Form::close()!!}
    {{-- </form> --}}
    </form>
    </div>
{{-- </div> --}}
</div>
</section>
@endsection