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

              <h3>Categories</h3>
              <a href="{{url('/admin/category/create')}}" class="btn btn-primary">Add category</a>
              <br>
              <br>
              <table class= "table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id/#</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                  <tbody>
                                    @foreach($data as $cat)
                                  <tr>
                                        <td>{{$cat->id}}</td>
                                        <td>{{$cat->title}}</td>
                                        <td><img src="{{asset('imgs').'/'.$cat->image}}" width="50"/>{{$cat->image}}</td>
                                        <td>
                                          <a class="btn btn-info btn-sm" href="{{url('admin/category/'.$cat->id.'/edit')}}">Update</a>
                                          <a onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm" href="{{url('admin/category/'.$cat->id.'/delete')}}">Delete</a>
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
