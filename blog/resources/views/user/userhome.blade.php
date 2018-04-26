<?php use Illuminate\Http\Request;  ?>
@extends('user/app')

@section('bg-img',asset('user/img/home-bg.jpg'))
@section('title','Blog System')
@section('description','Welcome To My Blog System')


@section('content')
  <a href="{{url('user/createpost')}}" class="btn btn-danger pull-right" style="display:inline-block;">add post</a>
@foreach($post as $post)
<div class="container">

      <div class="row">
    
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="{{url('post',$post->slug) }}">
              <h2 class="post-title">
                {{$post->title}}
              </h2>

              <h3 class="post-subtitle">
                {{$post->subtitle}}
              </h3>
            </a>
            <p class="post-meta">
              Posted on
               {{$post->created_at}}</p>

          </div>
        </div>
      </div>

    </div>

@endforeach
    


@endsection