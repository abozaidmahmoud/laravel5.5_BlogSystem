@include('admin/layouts/head')

<body class="bg-black">
		@include('includes/messages')
        <div class="form-box" id="login-box">
            <div class="header">Register New Membership</div>

            <form action="{{route('member.store')}}" method="post">
            	{{csrf_field()}}
            	
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="username">
                    </div>
                    <div class="form-group">
                        <input type="text" name="firstname" class="form-control" placeholder="firstname">
                    </div>
                    <div class="form-group">
                        <input type="text" name="lastname" class="form-control" placeholder="lastname">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="email ">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="password">
                    </div>
                </div>
                <div class="footer">                    

                    <button type="submit" class="btn bg-olive btn-block">Sign up</button>

                    <a href="{{url('user/login')}}" class="text-center">I already have a membership</a>
                </div>
            </form>
  <a href="javascript:history.go(-1)" class="btn btn-into btn-lg">  <span class="glyphicon glyphicon-arrow-left"></span></a>
        </div>



        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../../js/bootstrap.min.js" type="text/javascript"></script>

    
</body>

@include('admin/layouts/footer')