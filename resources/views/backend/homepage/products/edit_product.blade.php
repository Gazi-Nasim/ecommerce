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
                    <h3 class="card-title">Add Featured Product in Home Page<small></small></h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="post" action="{{route('product.update',$data->id)}}" enctype="multipart/form-data" id="quickForm">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                      {{-- <div class="form-group">
                        <label for="product">Title</label>
                        <input type="text" name="title" value="{{$data->category_id}}" class="form-control" id="product" placeholder="Enter Product Name">
                      </div> --}}
                      <div class="form-group">
                        <label for="product">Product Name</label>
                        <input type="text" name="name" value="{{$data->name}}" class="form-control" id="product" placeholder="Enter Product Name">
                      </div>
                      <div class="form-group">
                        <label for="product">Short_Description</label>
                        <input type="text" name="short_description" value="{{$data->short_description}}" class="form-control" id="product" placeholder="Short_Description">
                      </div>
                      <div class="form-group">
                        <label for="product">Full_Description</label>
                        <input type="text" name="full_description" value="{{$data->full_description}}" class="form-control" id="product" placeholder="Full_Description">
                      </div>
                      <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" value="{{$data->price}}" class="form-control" id="price" placeholder="Enter price">
                      </div>
                      <div class="form-group">
                        <label for="qty">Photo</label>
                        <input type="file" name="photo" value="{{$data->photo}}" class="form-control" id="qty" placeholder="Enter Quantity">
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
      
        
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @endsection

  
