<?php use Illuminate\Http\Request; ?>
<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.html"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
          
            <li class="nav-item">
              <a class="nav-link" href="{{url('user/register')}}">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('user/login')}}">Login</a>
            </li>
            
           <li class="nav-item">
              <a class="nav-link" href="{{url('Blog')}}">Logout</a>
            </li>
           
           
          
          </ul>
        </div>
      </div>
    </nav>

     <!-- Page Header -->
    <header class="masthead" style="background-image: url(@yield('bg-img'))">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>@yield('title')</h1>
              <span class="subheading">@yield('description')</span>
            </div>
          </div>
        </div>
      </div>
    </header>
