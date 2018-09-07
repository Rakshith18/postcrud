@extends('master')

@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h3>Show Post</h3></div>
			<div class="pull-right" >
				<a class="btn btn-primary" href="{{route('posts.index')}}">Back</a>
			</div>
		</div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Title :</strong>
			{{ $post->title}}
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Body :</strong>
			{{ $post->body}}
		</div>
	</div>
</div>

@endsection