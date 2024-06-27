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
                  <form method="post" action="{{route('fp.update',$data->id)}}" enctype="multipart/form-data" id="quickForm">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                      <div class="form-group">
                        <label for="product">Product Name</label>
                        <input type="text" name="name" class="form-control" id="product" value="{{$data->name}}">
                      </div>
                      <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control" id="price" value="{{$data->price}}">
                      </div>
                      <div class="form-group">
                        <label for="qty">photo</label>
                        <input type="file" name="photo" class="form-control" id="qty" value="{{$data->photo}}">
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

  
