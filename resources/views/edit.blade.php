@extends('master')

@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h3>Edit Post</h3>
		</div>
		<div class="pull-right" >
			<a class="btn btn-primary" href="{{route('posts.index')}}">Back</a>
		</div>
	</div>
</div>

@if(count($errors)>0)
<div class="alert alert-danger">
	There were problems with input
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

{!! Form::model($post, ['method'=>'PATCH','route'=>['posts.update', $post->id]])!!}
@include('form')
{!!Form::close()!!}

@endsection