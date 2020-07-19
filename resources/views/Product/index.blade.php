<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Votin System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/app.css">
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <linl href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<style>
.btndelete{
  display:inline-block;
}
#example_paginate{
  float:right;
}


</style>

    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
            
            </li>
          
          </ul>

      
          <!-- Right navbar links -->
          <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
          
          
          
          </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- Sidebar -->
            <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                <img src="https://s3.amazonaws.com/37assets/svn/765-default-avatar.png" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                <a href="#" class="d-block">{{auth::user()->name}}</a>
              </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                    @if(auth::user()->name=="admin")
                    <li class="nav-item">              
                  <a href="{{ url('product') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <img src="https://img.icons8.com/doodle/30/000000/cake--v1.png"/>
                    <p>
                      Product
                      
                    </p>
                  </a>
                </li>
                @endif
              
                @if(auth::user()->name=="admin")
                <li class="nav-item">
                  <a href="{{route('result.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <img src="https://img.icons8.com/fluent/30/000000/report-card.png"/>
                    <p>
                      Voting_Result
                      
                    </p>
                  </a>
                </li>
              @endif
              

                <li class="nav-item">
                  <a href="{{route('logout')}}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <img src="https://img.icons8.com/nolan/30/logout-rounded-up.png"/>
                    <p>
                      Log out
                      
                    </p>
                  </a>
                </li>

              </ul>
            </nav>
            <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <div class="content-header">
            <div class="container-fluid">
            
                <!-- datatable -->
                <!-- Content Wrapper. Contains page content -->
                 <body>
                 @include('sweetalert::alert')

                  <!-- Main content -->
                  <section class="content">
                    <div class="row">
                      <div class="col-12">
                      
                        <!-- /.card -->

                        <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">Product Detail Page</h3>
                            <a href="{{route('product.create')}}" class="" >
                              <button type="button" class="btn btn-primary float-right">Add Product</button>
                 

                             </a>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                              <table id="example" class="table table-striped table-bordered" style="width:100%">
                                  <thead>
                                      <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                      <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                  @foreach($products as $product)
                                      
                                      <tr>

                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{Str::limit($product->description,10)}}</td>
                                        
                                        <td><img class="product_dis"src="{{$product->image}}" style="height:60px;" ></td>

                                        <td class="">
                                        <a href="{{ route('product.edit',$product->product_id)}}">
                                        <button type="button" class="btn btn-success">Edit</button></a>
                                      
                                        
                                        <form method="POST" action="{{ route('product.destroy',$product->product_id ) }}" class="btndelete">
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
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                      </tr>
                                  </tfoot>
                              </table>
                              
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
                </body>
              <!-- /.content-wrapper -->
                
              
            </div>
            <!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->
        </div>
        <!-- /.content-wrapper -->

     

 
    </div>





<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- AdminLTE App -->

</body>







<!-- sad -->

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>
</html>

