@extends('layouts.main')
	@section('content')
			<h2>{{$obj->name}}</h2>
   			
			{!!$obj->body!!}
			
			
			
			
   			
	@endsection