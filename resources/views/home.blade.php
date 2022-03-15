@extends('layout')
@section('title','Blog Home')
@section('content')
      <!-- Blog Entries Column -->
      <div class="col-md-8">

       <!-- <h1 class="my-4">Page Heading
          <small>Secondary Text</small>
        </h1> -->

        <!-- Blog Post -->
        <div class="card mb-4">
        @if(count($posts)>0)
          @foreach($posts as $post)
          <img class="card-img-top" src="{{asset('imgs/thumb/'.$post->thumb)}}" alt="{{$post->title}}">
          <div class="card-body">
            <h2 class="card-title">{{$post->title}}</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="{{url('detail/'.$post->id)}}" class="btn btn-primary">Read</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2017 by
            <a href="#">Start Bootstrap</a>
          </div>
          @endforeach
          @else
          <p class="alert alert-danger">No Post Found yet</p>
          @endif
        </div>

        

        <!-- Pagination -->
        {{$posts->links()}}

        <!--<ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>-->

      </div>
  @endsection