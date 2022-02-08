@include ('backend.includes.admin_header')



  <!-- Page Wrapper -->
  <div id="wrapper">




    <!-- Sidebar -->

       @include('backend.includes.admin_navigations')

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->

              <!-- Approach -->
              <h3>Add Categories</h3>

              <a href="{{url('/admin/category')}}" class="btn btn-primary">View Categories</a>
              <br>
              <br>
              @if($errors)
                @foreach($errors->all() as $error)
                  <p class="text-danger">{{$error}}</p>
                @endforeach
              @endif

              @if(Session::has('success'))
              <p class="text-success">{{session('success')}}</p>
              @endif

              <form action="{{url('admin/category')}}" method="post" enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                      <label for="">Category Title</label>
                      <input type="text" class="form-control" name="title">
                  </div>
                  <div class="form-group">
                      <label for="">Category detail</label>
                      <input type="text" class="form-control" name="detail">
                  </div>
                  <div class="form-group">
                      <label for="">Category Image</label>
                      <input type="file"  name="image">
                  </div>

                  <div class="form-group">
                      <input class= "btn btn-primary" type="submit" value="Publish category">
                  </div>

              </form>





        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

  @include('backend.includes.admin_footer')
