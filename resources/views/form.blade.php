<div class="row">
	<div class="col-xs-12 col-sm-12 col-lg-12">
	<div class="form-group">
		<strong>Title :</strong>
		{!!Form::text('title',null,['placeholder'=>'title','class'=>'form-control'])!!}
	</div>
</div>
<div class="col-xs-12 col-sm-12 col-lg-12">
	<div class="form-group">
		<strong>Body :</strong>
		{!!Form::textarea('body',null,['placeholder'=>'Body','class'=>'form-control','style'=>'height:150px'])!!}

	</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
	
	<button type="submit" class="btn btn-md btn-primary" name="button">Submit</button>
</div>
</div>