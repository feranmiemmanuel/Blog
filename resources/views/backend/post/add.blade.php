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
              <h3>Add Posts</h3>

              <a href="{{url('/admin/posts')}}" class="btn btn-primary">View Posts</a>
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

              <form action="{{url('admin/posts')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Post Category <span class="text-danger">*</span></label>
                    <td>
                      <select class="form-control" name="category">
                        @foreach($cats as $cat)
                          <option value="{{$cat->id}}">{{$cat->title}}</option>
                        @endforeach
                      </select>
                    </td>
                </div>
                  <div class="form-group">
                      <label for="">Title<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="title">
                  </div>
                  <div class="form-group">
                      <label for="">Thumbnail</label>
                      <input type="file"  name="thumb">
                  </div>
                  <div class="form-group">
                      <label for="">Image</label>
                      <input type="file"  name="full_img">
                  </div>
                  <div class="form-group">
                      <label for="">Detail <span class="text-danger">*</span></label>
                      <textarea class="form-control" name="detail"></textarea>
                  </div>
                  <div class="form-group">
                      <label for="">Tags</label>
                      <textarea class="form-control" name="tags"></textarea>
                  </div>
                  <div class="form-group">
                      <input class= "btn btn-primary" type="submit" value="Publish Post">
                  </div>

              </form>





        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

  @include('backend.includes.admin_footer')
