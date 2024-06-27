@extends('backend.layouts.main')
@section('main-content')


 

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <!-- left column -->
              <div class="col-md-8">
                <!-- jquery validation -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Add a new Blog<small></small></h3>
                  </div>
                  
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="POST" action="{{route('blog.store')}}" enctype="multipart/form-data" id="quickForm">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="headline">Headline</label>
                        <input type="text" name="headline" class="form-control" id="product" placeholder="Enter Headline ">
                      </div>
                      <div class="form-group">
                        <label for="brief">Brief</label>
                        <input type="text" name="brief" class="form-control" id="price" placeholder="Enter price">
                      </div>
                                                                
                      <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" name="photo" class="form-control" id="qty" placeholder="Enter Quantity">
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
                <th>Headline</th>
                <th>Brief</th>
                <th>Date</th>
                <th>Photo</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody> 
              @foreach ($blog as $k=>$d)                                                                         
              <tr> 
                <td>{{$k+1}}</td>                             
                <td>{{$d->headline}}</td>                             
                <td>{{$d->brief}}</td>                             
                <td>{{$d->created_at}}</td>                             
                <td><img src="{{url('uploads/'.$d->photo)}}" alt="" height="80" width="150"></td> 
                <td>
                  <a href="{{route('blog.edit',$d->id)}}" class="btn btn-primary">Edit</a>
                  <form class="btn btn-danger" method="POST" action="{{route('blog.destroy',$d->id)}}">
                      @csrf
                      @method('DELETE')
                      <input type="submit" value="Delete">
                  </form>
                </td>                            
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @endsection

  
