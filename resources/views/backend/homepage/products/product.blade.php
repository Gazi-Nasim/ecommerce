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
                  <div class="container-fluid">
                  <form method="post" action="{{route('product.store')}}" enctype="multipart/form-data" id="quickForm">
                    @csrf
                    
                      <div class="card-body">
                       <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="product">Category</label>
                            <select name="category_id" id="" class="form-control">
                            @foreach ($categories as $c)
                          <option value="{{$c->id}}">{{$c->title}}</option>
                           @endforeach
                           </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                          <div class="form-group">
                          <label for="product">Product Name</label>
                          <input type="text" name="name" class="form-control" id="product" placeholder="Enter Product Name">
                          </div>
                        </div>
                       </div>
                        <div class="row">
                          <div class="col-md-6">
                          <div class="form-group">
                          <label for="product">Short_Description</label>
                          <input type="text" name="short_description" class="form-control" id="product" placeholder="Short_Description">
                          </div>
                          </div>

                          <div class="col-md-6">
                          <div class="form-group">
                          <label for="product">Full_Description</label>
                          <input type="text" name="full_description" class="form-control" id="product" placeholder="Full_Description">
                        </div>
                       </div>
                        </div>

                        <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                          <label for="price">Price</label>
                          <input type="text" name="price" class="form-control" id="price" placeholder="Enter price">
                        </div>
                        </div>

                        <div class="col-md-6">
                        <div class="form-group">
                          <label for="qty">Photo</label>
                          <input type="file" name="photo" class="form-control" id="qty" placeholder="Enter Quantity">
                        </div>                                          
                      </div>
                        </div>
                      
                    <!-- /.card-body -->
                     
                     
                      <button type="submit" class="btn btn-block btn-primary">Submit</button>
                      
                  
                 
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
                <th>Title</th> 
                <th>Short_Description</th>
                <th>Full_Description</th>
                <th>Price</th>
                <th>Photo</th>
                <th>Action</th>
                
              </tr>
            </thead>
            <tbody>
              
                
                @foreach ($data as $k=>$d)
                    <tr>
                      <td>{{$k+1}}</td>
                      <td>{{$d->name}}</td>
                      <td>{{$d->title}}</td>
                      <td>{{$d->short_description}}</td>
                      <td>{{$d->full_description}}</td>
                      <td>{{$d->price}}</td>
                      <td><img src="{{url('uploads/'.$d->photo)}}" alt="" height="80" width="150"></td>
                      <td>
                        <a href="{{route('product.edit',$d->id)}}">Edit</a>
                        <form action="{{route('product.destroy',$d->id)}}" method="POST">
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

  
