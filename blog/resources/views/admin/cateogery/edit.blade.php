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
                                    <h3 class="box-title">Cateogery</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <!-- print form validation errors  -->
                               @include('includes.messages')
                                <form role="form" action="{{ route('cateogery.update',$cateogery->id) }}" method="post" >
                                    {{csrf_field()}}
                                    {{method_field('PUT')}}
	                                    <div class="box-body">
	                                        <div class="form-group">
	                                            <label for="name">Cateogery Title</label>
	                                            <input type="text" class="form-control" id="name" placeholder="name" name="name" value="{{$cateogery->name}}">
	                                        </div>
	                                        <div class="form-group">
	                                            <label for="slug">Cateogery Slug</label>
	                                            <input type="text" class="form-control" id="slug" placeholder="slug" name="slug" value="{{$cateogery->slug}}">
	                                        </div>        
	                            </div>
	                             <div class="box-footer">
	                                   <button type="submit" class="btn btn-primary">Update</button>
                                        <a href="{{route('cateogery.index')}}" class="btn btn-warning">Back</a>
	                             </div>
                            </form>
                            </div><!-- /.box -->

                          
                        </div><!-- /.col-->
                    </div><!-- ./row -->



                </section><!-- /.content -->
            </aside><!-- /.right-side -->




@endsection