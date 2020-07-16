@extends('layouts.master')
@section('content_warpper')


<body >
 
      <!-- Content Wrapper. Contains page content -->
     
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Product Detail Page</h3>
                    <a href="{{route('product.create')}}" class="" >
                    <button type="button" class="btn btn-primary float-right">Add Product</button>
                 

                    </a>
                    <a href="{{url('/pdf')}}" class="" >
                    <button type="button" class="btn btn-primary float-right">Download Pdf</button>
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="table" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Image</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                       
                        @foreach($products as $product)
                        
                        <tr>
                          <td>{{$product->product_id}}</td>
                          <td>{{$product->name}}</td>
                          <td><img class="product_dis"src="{{Storage::url($product->image)}}"></td>

                          <td class="">
                          <a href="{{ route('product.edit',$product->product_id)}}">
                          <button type="button" class="btn btn-success">Edit</button></a>
                         
                          
                          <form method="POST" action="{{ route('product.destroy',$product->product_id ) }}" >
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </form>

                        </td>

                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Image</th>
                      <th>Action</th>
                    </tr>
                    </tfoot>
                  </table>
                  <div class="float-right">
                   {{ $products->links() }}
                  </div>
                </div>
                <!-- /.card-body -->
              
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->
      
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
     <!-- /.control-sidebar -->
 
  <!-- ./wrapper -->
</body>
@endsection
