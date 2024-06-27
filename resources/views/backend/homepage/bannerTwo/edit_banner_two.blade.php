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
                    <h3 class="card-title">Banner Two in Home Page<small></small></h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="post" action="{{url('/postbannerTwo')}}" enctype="multipart/form-data" id="quickForm">
                    @csrf
                    <div class="card-body">                                                                      
                      <div class="form-group">
                        <label for="qty">Photo</label>
                        <input type="file" name="photo" class="form-control">
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
                <th>Photo</th>
                <th>Update Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
             {{-- @forelse ($data as $k=>$d)       
              <tr>
                <td>{{$k+1}}</td>                             
                <td>{{$d->photo}}</td>                             
                <td>{{$d->updated_date}}</td>                             
                <td>
                  <a href="">Edit</a>
                  <form action="{{url('\bannerTwo-delete')}}">Delete</form>
                  <form action="{{route('bannerTwo-delete',$d->id)}}" method="POST">
                            
                            @method('DELETE')
                            @csrf
                            <input type="submit" value="Delete">
                          </form>
                </td>                                                         
              </tr> 
              @empty
              
                  
              @endforelse --}}
            </tbody>
          </table>
        </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @endsection

  
