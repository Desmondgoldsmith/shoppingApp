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
    <div class="card col-md-12">
        <div class="container bg-primary"><h3>Add Category</h3></div>
    <br>
        <form action="">
    <div class="container">

        <div class="form-group">
            <label for="category">Add Category</label>
            <input type="text" class="form-control" id="category" placeholder="add category">    
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        
        </div>
    </form>
    </form>
    </div>
{{-- </div> --}}
</div>
</section>
@endsection