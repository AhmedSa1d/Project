@extends('layouts.master')
@section('content')
		<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create New Post</h1>
			<hr>
			<form method="post" enctype="multipart/form-data" data-parsley-validate action="{{ url('posts/posts') }}">
				{{csrf_field()}}
                    <div class="form-group">
                        <label name="title" >Title:</label>
                        <input type="text" id="title" name="title" maxlength="255" placeholder="Add Post Title" class=" file-input form-control" required="" >
                    </div>
                     <div class="form-group">
                        <label name="slug" >Slug:</label>
                        <input type="text" id="slug" name="slug" minlength="5" maxlength="255" placeholder="Add Post slug" class="form-control" required="">
                    </div>
                    
                    <div class="form-group">
                        <label name="body" >Body:</label>
                        <textarea type="text" id="body" placeholder="Add Post Body Here " name="body" rows="11"  class="form-control"> Add Post Body Here ...</textarea>
                    </div>
                    <div class="form-group text-center">
                    <input type="submit" value="Create New Post" class="btn btn-block btn-success">
                	</div>
                </form>
		</div>
	</div>
@endsection