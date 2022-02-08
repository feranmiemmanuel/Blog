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
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Welcome Admin</h6>

                  <table class= "table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Author</th>
                                                <th>Title</th>
                                                <th>Category</th>
                                                <th>Status</th>
                                                <th>Image</th>
                                                <th>Tags</th>
                                                <th>Comments</th>
                                                <th>Date</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                      <tbody>
                                      <tr>
                                            <td>$post_id</td>
                                            <td>$post_author</td>
                                            <td>$post_title</td>
                                            <td>$post_status</td>
                                            <td><img src='../img/blog/main-blog/$post_image' alt= 'img' width='100'></td>
                                            <td>$post_tags</td>
                                            <td>$post_comments_count</td>
                                            <td>$post_date</td>
                                            <td><a href='posts.php?source=edit_post&p_id={$post_id}'>EDIT</a></td>
                                            <td><a href='posts.php?delete={$post_id}'>DELETE</a></td>

                                      </tr>
                                    </tbody>
                                    </table>
                </div>



              </div>




        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

  @include('backend.includes.admin_footer')
