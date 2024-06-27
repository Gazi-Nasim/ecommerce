@extends('backend.layouts.main')
@section('main-content')


 

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <!-- left column -->
              <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Add A New Banner in Home Page<small></small></h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="" action="" id="quickForm">
                    <div class="card-body">
                      <div class="form-group">
                        <label for="product">Product Name</label>
                        <input type="text" name="name" class="form-control" id="product" placeholder="Enter Product Name">
                      </div>
                      <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control" id="price" placeholder="Enter price">
                      </div>
                      <div class="form-group">
                        <label for="qty">Quantity</label>
                        <input type="text" name="qty" class="form-control" id="qty" placeholder="Enter Quantity">
                      </div>                                          
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
                <!-- /.card -->
                </div>
              <!--/.col (left) -->
              <!-- right column -->
              <div class="col-md-6">
    
              </div>
              <!--/.col (right) -->
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </section>
      
        <div class="card-body table-responsive p-0" style="height: 300px;">
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Updated Time</th>
              </tr>
            </thead>
            <tbody>
              
                  
             
              <tr>
                
                
              </tr>
              
            </tbody>
          </table>
        </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @endsection

  
