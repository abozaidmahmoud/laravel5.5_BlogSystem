@extends('admin/layouts/app')

@section('headsection')
	<link rel="stylesheet" href="{{asset('admin/plugins/select2/select2.min.css')}}">
@endsection
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
                                    <h3 class="box-title">Post</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                @include('includes.messages')
                               
                                <form role="form" action="{{route('post.update',$post->id) }}" method="post">
                                	
                                	{{csrf_field()}}
                                	{{method_field('PUT')}}
	                                    <div class="box-body">
	                                    	
	                                        <div class="form-group">
	                                            <label for="title">Post Title</label>
	                                            <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{$post->title}}" >
	                                        </div>
	                                        <div class="form-group">
	                                            <label for="subtitle">Post Sub Title</label>
	                                            <input type="text" class="form-control" id="subtitle" placeholder="Sub Title" name="subtitle" value="{{$post->subtitle}}">
	                                        </div>
	                                        <div class="form-group">
	                                            <label for="slug">Post Slug</label>
	                                            <input type="text" class="form-control" id="slug" placeholder="Slug" name="slug" value="{{$post->slug}}" >
	                                        </div>
	                                         <div class="form-group">
	                                            <label for="exampleInputFile">File input</label>
	                                            <input type="file" id="exampleInputFile">
	                                            <p class="help-block"></p>
	                                        </div>
	                             
	                                        <div class="checkbox form-group">
	                                            <label>
	                                            <input type="checkbox" name="status" value="1" @if($post->status==1) checked @endif><b style="color: red">Publish</b>
	                                           </label>
	                                        </div>
	                                    </div><!-- /.box-body -->
	                                    <!-- list all tags to choose from it -->
	                                   <div class="form-group">
							                <label>Select Tags</label>
							                <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tags[]">
							                	@foreach($tags as $tag)
								                  <option value="{{$tag->id}}"
								                  @foreach($post->tags as $posttag)
								                  	 @if($posttag->post_id ==$tag->id)
								                  	 	selected
								                  	 @endif
								                  @endforeach >{{$tag->name}}
								              </option>
								                @endforeach
							                </select>
             							</div>
             							<!-- list all cateogeries to choose from it -->
             							<div class="form-group">
							                <label>Select Cateogeries</label>
							                <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="cateogery[]">
								                 @foreach($cateogeries as $cateogery)
								                  <option value="{{$cateogery->id}}"
								                  @foreach($post->cateogeries as $postcat)
								                  	 @if($postcat->post_id  ==  $cateogery->id)
								                  	 	selected
								                  	 @endif
								                  @endforeach >{{$cateogery->name}}
								              </option>
								                @endforeach
								                
								                 
							                </select>
             							</div>
	                                
	                                   
	                                <div class='box'>
		                                <div class='box-header'>
		                                    <h3 class='box-title'>Write Post Body Here
		                                    <!-- tools box -->
		                                </div><!-- /.box-header -->
		                                <div class='box-body pad'>
		                                    
		                                        <textarea name="body" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$post->body}}</textarea>                      
		                            
		                                </div>
	                            </div>
	                          
	                             <div class="box-footer">
	                                        <button type="submit" class="btn btn-primary">Update</button>
	                                         <a href="{{route('post.index')}}" class="btn btn-warning">Back</a>
	                             </div>
	                              
                            </form>
                            </div><!-- /.box -->

                          
                        </div><!-- /.col-->
                    </div><!-- ./row -->



                </section><!-- /.content -->
            </aside><!-- /.right-side -->

@endsection

@section('footersection')

	<script src="{{asset('admin/plugins/select2/select2.full.min.js')}}"></script>
	<script >
		$(document).ready(function(){
			 $(".select2").select2();
		})
	</script>

@endsection