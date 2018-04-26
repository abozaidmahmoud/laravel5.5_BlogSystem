@include('admin/layouts/head')

<body class="bg-black">
	
        <div class="form-box" id="login-box">
        	   @include('includes/messages')
            <div class="header">Login</div>
            <form action="{{url('user/home')}}" method="post">
            	{{csrf_field()}}
            	{{method_field('get')}}
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="username">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="password">
                    </div>
                </div>
                <div class="footer">                    
                    <button type="submit" class="btn bg-olive btn-block">Sign IN</button>
                     <a href="{{url('user/register')}}" class="text-center">Register</a>
                </div>

            </form>
  <a href="javascript:history.back()" class="btn btn-into btn-lg">  <span class="glyphicon glyphicon-arrow-left"></span></a>
        </div>



        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="{{asset('admin/js/bootstrap.min.js')}}" type="text/javascript"></script>

    
</body>

@include('admin/layouts/footer')