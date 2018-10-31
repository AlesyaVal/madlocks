   	@extends('layouts.base')
	@section('scripts')
   @parent
   <script src= "{{asset('public/media/ckeditor/ckeditor.js')}}"></script>
 @endsection
	@section('content')
			<h2>Ваша заявка</h2>
   			<div class="maintext">
		<form method="post" action="{{asset('order')}}" class="form-inline">
			{!!csrf_field()!!}
<main class="col"> 
 <div class="form-group">
    <label for="exampleInputName2"> Ваше имя </label>
    <input type="text" name="name" class="form-control" id="exampleInputName2" placeholder="Введите имя">
  </div><br/>
  <div class="form-group">
    <label for="exampleInputEmail2"> Ваш Email </label>
    <input type="email" name="Email" class="form-control" id="exampleInputEmail2" placeholder="Введите email">
  </div><br/>
    <div class="form-group">
    <label for="exampleInputPhone2"> Ваш номер телефона </label>
    <input type="text" name="Phone" class="form-control" id="exampleInputEmail2" placeholder="Введите номер телефона">
  </div>
 </main>
 
 
   <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


 
			<div class="form-group">
				<textarea placeholder="Сообщение" name="body" rows="10" cols="45" class='ckeditor'></textarea>
			</div>
				<button type="submit" class="btn btn-secondary"  href="{{asset('order')}}">Отправить заявку</button>
  
		
                   
    </div>
  

</form>
		<table>	
			<tr>
			<td><a href="{{asset('basket')}}"class="btn btn-secondary btn-block">Вернуться к понравившимся</a></td>
			</tr>		
		</table>
			
			</div>
   			
@endsection