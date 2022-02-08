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
              <h3>Manage Settings</h3>
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
                      <label for="">Comment Auto Approve</label>
                      <input type="text" class="form-control" name="comment_auto">
                  </div>
                  <div class="form-group">
                      <label for="">User Auto Approve</label>
                      <input type="text" class="form-control" name="user_auto">
                  </div>
                  <div class="form-group">
                      <label for="">Recent Post Limit</label>
                      <input type="text" class="form-control" name="recent_limit">
                  </div>
                  <div class="form-group">
                      <label for="">Popular Post Limit</label>
                      <input type="text" class="form-control" name="popular_limit">
                  </div>
                  <div class="form-group">
                      <label for="">Recent Comment Limit</label>
                      <input type="text" class="form-control" name="recent_comment_limit">
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
