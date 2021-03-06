@extends('admin.index')



@section('content')

  @if(Session::has('deleted_user'))

<p class="bg-danger">{{session('deleted_user')}}</p>

  @endif


<h1>Users</h1>


<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Fotoğraf</th>
        <th>İsim</th>
        <th>E-mail</th>
        <th>Rol</th>
        <th>Durum</th>
        <th>Oluşturuldu</th>
        <th>Güncellendi</th>
      </tr>
    </thead>
    <tbody>
     
     	@if($users)

     	@foreach($users as $user)

      <tr>
        <td>{{$user->id}}</td>
        <td><img height="50" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
        <td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
        <td>{{$user->email}}</td>
        <td>{{$user->role->name}}</td>
        <td>{{$user->is_active == 1 ? 'Çevrimiçi' : 'Çevrimdışı' }}</td>
        <td>{{$user->created_at->diffForHumans()}}</td>
        <td>{{$user->updated_at->diffForHumans()}}</td>
      </tr>

      	@endforeach
   
   	@endif

    </tbody>
  </table>


@stop

