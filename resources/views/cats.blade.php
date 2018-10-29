   	@extends('layouts.base')
	@section('content')
			<h2>Мы можем вам предложить!</h2>
   			<div class="maintext">
			@foreach ($cats as $cat)
				<h2>{{$cat->name}}</h2>
			<div>	
			  {!!$cat->body!!}
			</div>
				@foreach ($cat->products()->get() as $one)
				</hr>
				@If ($one->picture)
					<img src="{{asset('public/uploads/thumb/'. $one->picture)}}"/>
				@else
					<img class='pruduct' src="{{asset('madia/img/nophoto.jpg')}}"/>
				@endif
			<h3>
	<a href="{{asset('product/'.$one->id)}}"	class='product_link'>
	{{$one->name}}
	</a>
	</h3>
	{!!$one->body!!}
				@endforeach
			@endforeach
			</div>
   			
@endsection