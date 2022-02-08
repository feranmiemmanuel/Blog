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

              <h3>Posts</h3>
              <a href="{{url('/admin/posts/create')}}" class="btn btn-primary">Add Posts</a>
              <br>
              <br>
              <table class= "table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id/#</th>
                                            <th>Title</th>
                                            <th>Thumbnail</th>
                                            <th>Full Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                  <tbody>
                                    @foreach($data as $post)
                                  <tr>
                                        <td>{{$post->id}}</td>
                                        <td>{{$post->title}}</td>
                                        <td><img src="{{asset('imgs/thumb').'/'.$post->thumb}}" width="50"/>{{$post->thumb}}</td>
                                        <td><img src="{{asset('imgs/full').'/'.$post->full_img}}" width="50"/>{{$post->img}}</td>
                                        <td>
                                          <a class="btn btn-info btn-sm" href="{{url('admin/posts/'.$post->id.'/edit')}}">Update</a>
                                          <a onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm" href="{{url('admin/posts/'.$post->id.'/delete')}}">Delete</a>
                                        </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                                </table>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

  @include('backend.includes.admin_footer')
