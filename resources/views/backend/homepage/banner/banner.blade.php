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
                    <h3 class="card-title">Add Carousel in Home Page<small></small></h3>
                  </div>
                  <br> <h2>{{session()->get('msg')}}</h2>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="POST" action="{{route('fb.store')}}" enctype="multipart/form-data" id="quickForm">
                    @csrf
                    
                    <div class="card-body">
                      <div class="form-group">
                        <label for="product">Title</label>
                        <input type="text" name="title" class="form-control"  placeholder="Enter Title" required>
                      </div>
                      <div class="form-group">
                        <label for="price">Headline</label>
                        <input type="text" name="headline" class="form-control" placeholder="Enter Headline" required>
                      </div>
                      <div class="form-group">
                        <label for="hline">Headline_1</label>
                        <input type="text" name="headline_1" class="form-control" placeholder="Enter Headline" required>
                      </div>
                      <div class="form-group">
                        <label for="qty">Brief</label>
                        <input type="text" name="brief" class="form-control" placeholder="Enter a Breafing" required>
                      </div>                                          
                      <div class="form-group">
                        <label for="qty">Big Photo</label>
                        <input type="file" name="photo" class="form-control" required>
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
                          <th>Title</th>
                          <th>Headline</th>
                          <th>Headline 1</th>
                          <th>Brief</th>
                          <th>Photo</th>
                          <th>Action</th>
                        </tr>
             
                      </thead>
                      <tbody>
                        
                        @forelse ($data as $k=>$d)
                        <tr>
                          <td>{{$k+1}}</td>
                          <td>{{$d->title}}</td>
                          <td>{{$d->headline}}</td>
                          <td>{{$d->headline_1}}</td>

                          <td>{{$d->brief}}</td>
                          <td><img src="{{url('uploads/'.$d->photo)}}" height="100px" width="200px"></td>
                          <td>
                            
                            
                            <a href="{{route('fb.edit',$d->id)}}" class="btn btn-primary">Edit</a><br>
                            <form action="{{route('fb.destroy',$d->id)}}" method="POST">
                            
                            @method('DELETE')
                            @csrf
                            <input type="submit" value="Delete">
                          </form>
                          </td>
                          
                        </tr>
                        @empty

                      <tr>
                        <th colspan="5">No Product found!</th>
                      </tr>
                          
                      
                            
                      @endforelse
                     
                        
                      </tbody>
                      
          </table>
        </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @endsection

  
