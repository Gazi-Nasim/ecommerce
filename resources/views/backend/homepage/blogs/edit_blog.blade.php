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
                    <h3 class="card-title">Edit this Blog<small></small></h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="post" action="{{route('blog.update',$data->id)}}" id="quickForm">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                      <div class="form-group">
                        <label for="headline">Headline</label>
                        <input type="text" value="{{$data->headline}}" name="headline" class="form-control" id="product" placeholder="Enter Headline ">
                      </div>
                      <div class="form-group">
                        <label for="brief">Brief</label>
                        <input type="text" value="{{$data->brief}}" name="brief" class="form-control" id="price" placeholder="Enter price">
                      </div>
                                                               
                      <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" value="{{$data->photo}}" name="photo" class="form-control" id="qty" placeholder="Enter Quantity">
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
      
        
  
  @endsection

  
