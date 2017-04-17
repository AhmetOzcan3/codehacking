@extends('layouts.admin')



@section('content')

	<h1>Yazılar</h1>

	<table class="table">
	    <thead>
	      <tr>
	        <th>Id</th>
	        <th>Fotoğraf</th>
	        <th>Kullanıcı</th>
	        <th>Kategori</th>	        
	        <th>Başlık</th>
	        <th>Metin</th>
	        <th>Oluşturuldu</th>
	        <th>Güncellendi</th>
	      </tr>
	    </thead>
	    <tbody>

	    @if($posts)

	    @foreach($posts as $post)

	      <tr>
	       <td>{{$post->id}}</td>
	       <td><img height="50" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}"></td>	       
	        <td>{{$post->user->name}}</td>
	        <td>{{$post->category_id}}</td>
	        <td>{{$post->title}}</td>
	        <td>{{$post->body}}</td>
	        <td>{{$post->created_at->diffForHumans()}}</td>
	        <td>{{$post->updated_at->diffForHumans()}}</td>
	      </tr>
	      @endforeach
	 
	 	@endif

@stop
