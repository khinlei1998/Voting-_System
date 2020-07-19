@extends('layouts.master')
@section('content_warpper')
<form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="" name="name" placeholder="Enter name"  value="{{ old('name') }}">
    @error('name')
						<div class="text-danger" style="">{{ $message }}</div>
			@enderror
  </div>
  <div class="form-group">
    <input type="file" class="form-control" name="image">
         @error('image')
						<div class="text-danger" style="">{{ $message }}</div>
						@enderror
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
 <textarea class="form-control" name="description" placeholder="Enter Description"   value="{{ old('description') }}"></textarea>
    @error('description')
						<div class="text-danger" style="">{{ $message }}</div>
			@enderror
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection