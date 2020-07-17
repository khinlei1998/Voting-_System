@extends('layouts.master')
@section('content_warpper')
<div class="container-fluid">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0 text-dark" style="text-align:center;">Online Voting system</h1> -->
            
          </div><!-- /.col -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
   
        <div class="row">
        @foreach($products as $product)
        <form action="{{route('vote.store')}}" method="POST">
          @csrf 
          
            <div class="col-md-3">
              <div class="card" style="width:230px;margin-left:30px;">
            
                <img class="card-img-top " src="{{Storage::url($product->image)}}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">{{$product->name}} </p>
                  <input type="hidden" name="product_id" value="{{$product->product_id}}">
              
                  <button type="submit" class="btn btn-success"  >Vote</button>
                 
                  
                </div>
              </div>
            </div>
            </form>
          @endforeach
         
        
       

    </div>
    <!-- /.content -->
    @include('sweetalert::alert')
</div>
  @endsection