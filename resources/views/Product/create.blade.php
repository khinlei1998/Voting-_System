@extends('layouts.master')
@section('content_warpper')
<form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="" name="name" placeholder="Enter name">
   
  </div>
  <div class="form-group">
    <input type="file" class="form-control" name="image">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection