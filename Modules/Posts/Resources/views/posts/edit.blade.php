@extends('layouts.master')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<form  method="post" enctype="multipart/form-data" data-parsley-validate="" action="{{ url('posts/posts', $post->id) }}">
				{{csrf_field()}}
				{{ method_field('PATCH') }}
                    <div class="form-group">
                        <label name="title" >Title:</label>
                        <input type="text" id="title" name="title" maxlength="255" value="{{$post->title}}" class="form-control input-lg" required="">
                    </div>
                    <div class="form-group">
                        <label name="slug" >Slug:</label>
                        <input type="text" id="slug" name="slug" minlength="5" maxlength="255" value="{{$post->slug}}" class="form-control " required="">
                    </div>
                    <div class="form-group">
                        <label name="body" >Body:</label>
                        <textarea type="text" name="body" rows="11"  class="form-control"> {{$post->body}}</textarea>
                    </div>
			
		</div>
		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<label>URL Slug :</label>
					<p> <a href="#">{{url($post->slug)}}</a> </p>
				</dl>
				<dl class="dl-horizontal">
					<label>Created At :</label>
					<p> {{date('j M , Y h:ia',strtotime($post->created_at))}} </p>
				</dl>		
				<dl class="dl-horizontal">
					<label>Last Update :</label>
					<p>{{date('j M , Y h:ia',strtotime($post->updated_at))}}</p>
				</dl>
				<div class="row">
					<div class="col-sm-6">
						<a href="{{route('posts.show',$post->id)}}" class="btn btn-danger btn-block">Cancel</a>
						
					</div>

					<div class="col-sm-6">
						 <input type="submit" value="Save" class="btn btn-block btn-success">
						
					</div>
				</div>
			</div>
         

		</div>
		</form>
	</div><!--end of row and form !-->