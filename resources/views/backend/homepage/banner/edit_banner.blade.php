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
                    <h3 class="card-title">Edit Banner in Home Page<small></small></h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="POST" action="{{url('/banner_update/'.$data->id)}}" enctype="multipart/form-data" id="quickForm">
                    @csrf
                  @method('PUT')
                    <div class="card-body">
                      <div class="form-group">
                        <label for="product">Title</label>
                        <input type="text" name="title" class="form-control"  value="{{$data->title}}">
                      </div>
                      <div class="form-group">
                        <label for="price">Headline</label>
                        <input type="text" name="headline" class="form-control" value="{{$data->headline}}">
                      </div>
                      <div class="form-group">
                        <label for="price">Headline 1</label>
                        <input type="text" name="headline_1" class="form-control" value="{{$data->headline_1}}">
                      </div>
                      <div class="form-group">
                        <label for="qty">Brief</label>
                        <input type="text" name="brief" class="form-control" value="{{$data->brief}}">
                      </div>                                          
                      <div class="form-group">
                        <label for="qty">Big Photo</label>
                        <input type="file" name="photo" class="form-control" value="{{$fileName}}">
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

  
