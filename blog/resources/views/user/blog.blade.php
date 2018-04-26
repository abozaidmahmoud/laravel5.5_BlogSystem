@extends('user/app')
@section('bg-img',asset('user/img/home-bg.jpg'))
@section('title','Blog System')
@section('description','Welcome To My Blog System')

@section('register')
@show()
@section('content')
@foreach($post as $post)
<div class="container">
      <div class="row">
        
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="{{url('post',$post->slug) }}">
                <h2>{{$post->title}}</h2> 
            </a>
            <span>Created From <span class="post_time">{{$post->created_at->diffForHumans() }}</span> </span>
            <p class="post_body">{{$post->body}}</p>                       
          </div>          
        </div>
      </div>
      
</div>

@endforeach
    


@endsection