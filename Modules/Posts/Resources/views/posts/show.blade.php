
@extends('layouts.master')
@section('content')

	<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="text-center">
			<h1>View Post</h1>
		</div>
		<div class=" post col-md-8">
			<div class="post-title">
				<h1> {{$post->title}} </h1>
				<p> {{date('j M , Y  h:i a',strtotime($post->created_at))}} </p>
			</div>
			<p class="lead"> {!!$post->body!!} </p>
			<hr>
		</div>
			

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<label>URL Slug :</label>
					<p> <a href="">{{$post->slug}}</a> </p>
				</dl>
				<dl class="dl-horizontal">
					<label>Created At :</label>
					<p> {{date('j M , Y h:ia',strtotime($post->created_at))}} </p>
				</dl>		
				<dl class="dl-horizontal">
					<label>Last Update :</label>
					<p>{{date('j M , Y h:ia',strtotime($post->updated_at))}}</p>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						<a href="{{ route('posts.edit', ['Edit' => $post->id])}}" class="btn btn-primary btn-block">Edit</a>
						
					</div>

					<div class="col-sm-6">
						<form action="{{url('posts/posts', $post->id)}}" method="post">
			            {{csrf_field()}}
			            <input name="_method" type="hidden" value="DELETE">
			            <button class="btn btn-block btn-danger" type="submit">Delete</button>
			          </form>
						
						
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<a href="{{ route('posts.index') }}" class="btn btn-block btn-default btn-h1-spacies"> << See All Posts >> </a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection