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
              <a href="{{url('/admin/category')}}" class="btn btn-primary">View Posts</a>
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

              <form action="{{url('admin/posts/'.$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="">Post Category <span class="text-danger">*</span></label>
                    <td>
                      <select class="form-control" name="category">
                        @foreach($cats as $cat)
                        @if($cat->id==$data->cat_id)
                          <option selected value="{{$cat->id}}">{{$cat->title}}</option>
                          @else
                          <option value="{{$cat->id}}">{{$cat->title}}</option>
                          @endif
                        @endforeach
                      </select>
                    </td>
                </div>
                  <div class="form-group">
                      <label for="">Title</label>
                      <input type="text" value="{{$data->title}}"class="form-control" name="title">
                  </div>
                  <div class="form-group">
                    <p class="my-2"><img width="50" src="{{asset('imgs/thumb')}}/{{$data->thumb}}"/>{{$data->image}}</p>
                      <label for="">Thumb</label>
                      <input type="hidden" value="{{$data->thumb}}" name="thumb"/>
                      <input type="file"  name="thumb">
                  </div>
                  <div class="form-group">
                    <p class="my-2"><img width="50" src="{{asset('imgs/full')}}/{{$data->full_img}}"/>{{$data->image}}</p>
                      <label for="">Full Image</label>
                      <input type="hidden" value="{{$data->full_img}}" name="full_img"/>
                      <input type="file"  name="full_img">
                  </div>
                  <div class="form-group">
                      <label for="">Detail <span class="text-danger">*</span></label>
                      <textarea class="form-control" name="detail">{{$data->detail}}</textarea>
                  </div>
                  <div class="form-group">
                      <label for="">Tags</label>
                      <textarea class="form-control" name="tags">{{$data->tags}}</textarea>
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
