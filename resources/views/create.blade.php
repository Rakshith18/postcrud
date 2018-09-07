@extends('master')

@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h3> Add new Post</h3>
		</div>
		<div class="pull-right">
			<a class="btn btn-primary" href="{{route('posts.index')}}">Back</a>
		</div>
	</div>
</div>

@if($errors->any())
<div class="alert alert-danger">
	<strong>Whoops !!</strong>There were some problems with your input<br/>
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

{!! Form::open(['route'=>'posts.store','method'=>'post']) !!}
@include('form')
{!!form::close()!!}

@endsection


</div>