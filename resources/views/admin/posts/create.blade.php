@extends('layouts.admin')



@section('content')

	<h1>Yazı Oluştur</h1>

	<div class="row">
	
		{!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store', 'files'=>true]) !!}
	
		<div class="form-group">
	
			{!! Form::label('title', 'Başlık:') !!}
			{!! Form::text('title', null, ['class'=>'form-control']) !!}
		</div>

			<div class="form-group">
				
			{!! Form::label('category_id', 'Kategori:') !!}
			{!! Form::select('category_id', array(1=>'PHP', 0=>'Java'), null, ['class'=>'form-control']) !!}
			
			</div>

				<div class="form-group">
					
				{!! Form::label('photo_id', 'Fotoğraf:') !!}
				{!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
				
				</div>

					<div class="form-group">
						
					{!! Form::label('body', 'Metin:') !!}
					{!! Form::textarea('body', null, ['class'=>'form-control']) !!}
					
					</div>
	
		<div class="form-group">
	
				{!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
		</div>
		{!! Form::close() !!}	

</div>

<div class="row">


			@include('includes.form_error')	 

</div>



@stop
