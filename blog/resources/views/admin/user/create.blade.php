@extends('admin/layouts/app')

@section('content')

<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Text Editors
                        <small>Advanced form element</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Forms</a></li>
                        <li class="active">Editors</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class='row'>
                        <div class='col-md-12'>
                        	  <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">User</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <!-- print form validation errors -->
                                @include('includes.messages')
                                <form role="form" action="{{ route('user.store') }}" method="post">
                                    {{csrf_field()}}
	                                    <div class="box-body">
	                                        <div class="form-group">
	                                            <label for="name">UserName</label>
	                                            <input type="text" class="form-control" id="username" placeholder="username" name="username">
	                                        </div>
	                                        <div class="form-group">
	                                            <label for="firstname">FirstNmae</label>
	                                            <input type="text" class="form-control" id="firstname" placeholder="firstname" name="firstname">
	                                        </div>
                                              <div class="form-group">
                                                <label for="lastname">LastNmae</label>
                                                <input type="text" class="form-control" id="lastname" placeholder="lastname" name="lastname">
                                            </div>
                                             <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" placeholder="email" name="email">
                                            </div>
                                             <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" id="password" placeholder="password" name="password">
                                            </div>
                                    
	                                
	                            </div>
	                             <div class="box-footer">
	                                   <button type="submit" class="btn btn-primary">Submit</button>
                                       <a href="{{route('user.index')}}" class="btn btn-warning">Back</a>
	                             </div>
                            </form>
                            </div><!-- /.box -->

                          
                        </div><!-- /.col-->
                    </div><!-- ./row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
@endsection