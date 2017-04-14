@extends('layouts.admin')



@section('content')


								<h1>Kullanıcı Düzenle</h1>

					<div class="row">				

								<div class="col-sm-3">

								<img src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">

								</div>


								<div class="col-sm-9">




{!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}



	
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
					{!! Form::select('role_id', [''=>'Seçenekler'] +$roles, null, ['class'=>'form-control']) !!}
					
					</div>


				<div class="form-group">

				{!! Form::label('is_active', 'Durum:') !!}
				{!! Form::select('is_active', array(1 => 'Aktif', 0=> 'Aktif Değil'), null, ['class'=>'form-control']) !!}
				
				</div>

						<div class="form-group">
								
						{!! Form::label('photo_id', 'Fotoğraf:') !!}
						{!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
						
						</div>

					<div class="form-group">
						
					{!! Form::label('password', 'Şifre:') !!}
					{!! Form::password('password', ['class'=>'form-control']) !!}
					
					</div>
	
		<div class="form-group">
	
				{!! Form::submit('Güncelle', ['class'=>'btn btn-primary col-sm-6']) !!}
		</div>
		

		{!! Form::close() !!}	

	<h1></h1>
		
			{!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]]) !!}
		
		
			<div class="form-group">
		
					{!! Form::submit('Kullanıcıyı Sil', ['class'=>'btn btn-danger col-sm-6']) !!}
			</div>
			{!! Form::close() !!}	

		</div>

				</div>

		<div class="row">

		@include('includes.form_error')


		</div>

@stop