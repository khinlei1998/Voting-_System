@extends('layouts.master')
@section('content_warpper')
<form method="post" action="{{route('product.update',$product->product_id)}}" enctype="multipart/form-data">
{{ method_field('PUT') }}
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="" name="name" placeholder="Enter name" value="{{$product->name}}">
    @error('name')
						<div class="text-danger" style="">{{ $message }}</div>
			@enderror
  </div>
  <div>
  <img class="product_dis" src="{{Storage::url($product->image)}}">
  </div>
  <div class="form-group">
    <input type="file" class="form-control" name="image">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
 <textarea class="form-control" name="description" placeholder="Enter Description" >{{$product->description}}</textarea>
    @error('description')
						<div class="text-danger" style="">{{ $message }}</div>
			@enderror
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection