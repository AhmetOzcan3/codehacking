@extends('admin.index')



@section('content')


	<h1>Create Users</h1>

{!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store']) !!}



	
		<div class="form-group">
	
			{!! Form::label('name', 'İsim:') !!}
			{!! Form::text('name', null, ['class'=>'form-control']) !!}
		</div>

			<div class="form-group">
				
			{!! Form::label('email', 'Mail Adresi:') !!}
			{!! Form::email('email', null, ['class'=>'form-control']) !!}
			
			</div>

					<div class="form-group">
						
					{!! Form::label('role_id', 'Rol:') !!}
					{!! Form::select('role_id', [''=>'Seçenekler'] + $roles, null, ['class'=>'form-control']) !!}
					
					</div>


				<div class="form-group">

				{!! Form::label('status', 'Durum:') !!}
				{!! Form::select('status', array(1 => 'Çevrimiçi', 0=> 'Çevrimdışı'), null, ['class'=>'form-control']) !!}
				
				</div>

					<div class="form-group">
						
					{!! Form::label('password', 'Şifre:') !!}
					{!! Form::password('password', ['class'=>'form-control']) !!}
					
					</div>
	
		<div class="form-group">
	
				{!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
		</div>
		{!! Form::close() !!}	

		@include('includes.form_error')


		

@stop