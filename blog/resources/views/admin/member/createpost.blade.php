<!DOCTYPE html>
<html>
<head>
@include('admin/layouts/head')
<link rel="stylesheet" href="{{asset('admin/plugins/select2/select2.min.css')}}">
</head>

<body>	
<aside class="right-side">
                <!-- Content Header (Page header) -->
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
                               
                                <form role="form" action="{{url('user/insertpost')}}" method="post">
                                	{{csrf_field()}}
                                	{{method_field('PUT')}}
                                	
	                                    <div class="box-body">
	                                        <div class="form-group">
	                                            <label for="title">Post Title</label>
	                                            <input type="text" class="form-control" id="title" placeholder="Title" name="title">
	                                        </div>
	                                        <div class="form-group">
	                                            <label for="subtitle">Post Sub Title</label>
	                                            <input type="text" class="form-control" id="subtitle" placeholder="Sub Title" name="subtitle">
	                                        </div>
	                                        <div class="form-group">
	                                            <label for="slug">Post Slug</label>
	                                            <input type="text" class="form-control" id="slug" placeholder="Slug" name="slug">
	                                        </div>
	                                         <div class="form-group">
	                                            <label for="exampleInputFile">File input</label>
	                                            <input type="file" id="exampleInputFile">
	                                            <p class="help-block"></p>
	                                        </div>
	                             
	                                        <div class="checkbox">
	                                            <label>
	                                                <input type="checkbox" name="status" value="1"> <b style="color: red">Publish</b>
	                                            </label>
	                                        </div>
	                                    </div><!-- /.box-body -->

	                                     <div class="form-group">
							                <label>Select Tags</label>
							                <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tags[]">
								               @foreach($tags as $tag)
								                  <option value="{{$tag->id}}">{{$tag->name}}</option>
								                @endforeach
							                </select>
             							</div>

             							<div class="form-group">
							                <label>Select Cateogeries</label>
							                <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="cateogeries[]">
								                    @foreach($cateogeries as $cateogery)
								                 		 <option value="{{$cateogery->id}}">{{$cateogery->name}}</option>
								                   @endforeach
							                </select>
             							</div>

	                                   
	                                <div class='box'>
		                                <div class='box-header'>
		                                    <h3 class='box-title'>Write Post Body Here
		                                    <!-- tools box -->
		                                
		                                </div><!-- /.box-header -->
		                                <div class='box-body pad'>
		                                    
		                                        <textarea id="editor1" name="body"  placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>                      
		                            
		                                </div>
		                                  
	                            </div>
	                             <div class="box-footer">
	                                        <button type="submit" class="btn btn-primary">Submit</button>
	                                         <a href="{{route('post.index')}}" class="btn btn-warning">Back</a>
	                             </div>
                            </form>
                            </div><!-- /.box -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
	
	

	 


@include('admin/layouts/footer')
<script src="{{asset('admin/plugins/select2/select2.full.min.js')}}"></script>
	<script >
		$(document).ready(function(){
			 $(".select2").select2();
		})
	</script>
</body>
</html>