@extends('layouts.base')
	@section('content')
			<h2>{{$obj->name}}</h2>
   			<div class="maintext">
			{!!$obj->body!!}
			<a href="{{asset('basket/add/'.$obj->id)}}">
			Мне нравится
			</a>
			
			
			
			</div>
   			
@endsection