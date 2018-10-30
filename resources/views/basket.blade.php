@extends('layouts.base')
	@section('content')
	<h2>Мне нравится</h2>
   		<div class="maintext">
		<table class="table table-borderd table-striped" width=100%>
			<tr>
				<th>Изображение</th>
				<th>Название</th>
				<th>Цена</th>
				<th>количество</th>
				<th>Сумма</th>
				<th>действия</th>
				
			</tr>
				<tr>
					<th>Итого</th>
				</tr>
@php
$counts=0;
$itog=0;
@endphp
			@foreach ($arr as $key=>$value)
				@php
				$count=$value*$products[$key]->price;
				$counts+=$value;
				$itog+=$count;
				@endphp
				<tr>		
				<td>@If ($products[$key]->picture)
					<img src="{{asset('public/uploads/thumb/'. $products[$key]->picture)}}"/>
				@else
					<img class='pruduct' src="{{asset('madia/img/nophoto.jpg')}}"/>
				@endif</td>
				<td>{{$products[$key]->name}}</td>
				<td>{{$products[$key]->price}}</td>
				<td>{{$value}}</td>
				<td>{{$count}}</td>
				<td><a href="{{asset('basket/dell/'.$key)}}" data-id="{{$key}}">Уже не нравится</a></td>
				</tr>
			@endforeach
<tr>
<th colspan="3">Итого<th>
				<td><a href="{{asset('basket/clear/')}}">Убрать все</a></td>
				<td>{{$counts}}</td>
				<td>{{$itog}}</td>
</tr>
					
		</table>
		</div>
   			
@endsection