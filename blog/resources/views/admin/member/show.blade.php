<?php use Illuminate\Http\Request; ?>
@extends('admin/layouts/app')

@section('headsection')
	<link href="{{ asset('admin/css/datatables/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Blank page
                        <small>it all starts here</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Examples</a></li>
                        <li class="active">Blank page</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                 
				        <div class="box">
					        <div class="box-header with-border">
						          <h3 class="box-title">Users</h3>
						          <a href="{{url('user/register')}}" class="btn btn-success col-lg-offset-5"><i class="fa fa-plus"></i>Add New</a>
						          <div class="box-tools pull-right">
							            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
							              <i class="fa fa-minus"></i></button>
							           
						          </div>
					        </div>
					        <div class="box-body">
					         	 Start Manageming Users
					        </div>
					        <!-- /.box-body -->
					        <div class="box-footer">
					          	<div class="box">
						                <div class="box-header">
						                      <h3 class="box-title">Data Table With Full Features</h3>                                    
						                </div><!-- /.box-header -->
						                    <div class="box-body table-responsive">
						                            <table id="example1" class="table table-bordered table-striped">
						                                <thead>
						                                    <tr>
								                                <th>S.No </th>
								                                <th>UserNmae</th>
								                                <th>FirstName</th>
								                                <th>LastName</th>
								                                <th>email</th>
								                                <th>Edit</th>
								                                <th>Delete</th>
								                            </tr>
						                                </thead>
						                                <tbody>
						                                    @foreach($users as $user)    
						                                    <tr>
						                                        <td>{{$user->id}}</td>
						                                        <td>{{$user->username}}</td>   
						                                        <td>{{$user->firstname}}</td>
						                                        <td>{{$user->lastname}}</td>
						                                        <td>{{$user->email}}</td>
						                                        <!-- start edit button -->
						                                        <td>
						                                        	 @if(request()->session()->get('groubid')!==0)
						                                        		<a href="{{route('member.edit',$user->id)}}"  onclick="return false" style="color: grey"><i class="glyphicon glyphicon-edit" ></i></a>
						                                        		 @else
                                                                        <a href="{{route('member.edit',$user->id)}}"><i class="glyphicon glyphicon-edit" ></i></a>
						                                        	@endif
						                                        </td>
						                                        <!-- end edit button -->

						                                        <!-- start delete button -->
						                                        <td>
						                                        	  
						                                        	<form id="delete_form_{{$user->id}}" method="post" action="{{route('member.destroy',$user->id)}}" style="display: none;">
						                                        		{{csrf_field()}}
						                                        		{{method_field('DELETE')}}
						                                      
						                                        	</form>
						                                        	@if(request()->session()->get('groubid')==0)
								                                        	<a href="" onclick="
								                                        	if(confirm('are you want to delete this?')){
								                                        	event.preventDefault();
								                                        	document.getElementById('delete_form_{{$user->id}}').submit();
								                                        	}
								                                        	else{
								                                        	event.preventDefault();
								                                             }
								                                        	">
								                                        	<i class="glyphicon glyphicon-trash"></i>
								                                        	</a>
						                                        	 @else
                                                                        <a href="" style="color: grey" onclick="return false"><i class="glyphicon glyphicon-trash"></i></a>
                                                                    
                                                                    @endif

						                                        </td>
						                                         <!-- end delete button -->
						                                       
						                                    </tr>
						                                    @endforeach
						                                    	<a href="" onclick="event.preventDefault();
						                                        		document.getElementsByClassName('show')[0].submit();
						                                        	">
						                                        		
						                                        		show
						                                        	</a>
						                                            
						                                </tbody>
						                                <tfoot>
						                                    <tr>
						                                        <th>S.No </th>
								                                <th>UserNmae</th>
								                                <th>FirstName</th>
								                                <th>LastName</th>
								                                <th>email</th>
								                                <th>Edit</th>
								                                <th>Delete</th>
						                                    </tr>
						                                </tfoot>
						                            </table>
						                    </div><!-- /.box-body -->
						        </div><!-- /.box -->
					        </div>
					        <!-- /.box-footer-->
				      </div>
                </section><!-- /.content -->
</aside><!-- /.right-side -->

@endsection()

@section('footersection')

  <script src="{{asset('admin/js/plugins/datatables/jquery.dataTables.js')}}" type="text/javascript"></script>
  <script src="{{asset('admin/js/plugins/datatables/dataTables.bootstrap.js')}}" type="text/javascript"></script>
      <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>
@endsection