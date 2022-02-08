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

              <form action="" method="post" enctype="multipart/form-data">

                  <div class="form-group">
                      <label for="post_title">Post Title</label>
                      <input type="text" class="form-control" name="post_title">
                  </div>
                  <div class="form-group">

                     <select name="post_category" id="">

                     </select>
                  </div>

                  <div class="form-group">
                      <label for="post_author">Post Author</label>
                      <input type="text" class="form-control" name="post_author">
                  </div>
                  <div class="form-group">
                      <label for="post_status">Post Status</label>
                      <input type="text" class="form-control" name="post_status">
                  </div>
                  <div class="form-group">
                      <label for="post_image">Post Image</label>
                      <input type="file"  name="image">
                  </div>
                  <div class="form-group">
                      <label for="post_tags">Post Tags</label>
                      <input type="text" class="form-control" name="post_tags">
                  </div>
                  <div class="form-group">
                      <label for="post_content">Post Content</label>
                      <textarea class="form-control" name="post_content" id="" cols="30" rows="10">
                      </textarea>
                  </div>
                  <div class="form-group">
                      <input class= "btn btn-primary" type="submit" name="create_post" value="Publish Post">
                  </div>

              </form>





        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

  @include('backend.includes.admin_footer')
