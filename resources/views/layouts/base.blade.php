<!DOCTYPE html>
<html lang="ru">
 <head>
   <meta charset="utf-8">
   <meta name="description" content="1, 2, 3 предложения">
   <meta name="keywords" content="выражения через ,">
   <meta name="author" content="">
   <title> название сайта </title>
	<link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
   <link  type="text/css" rel="stylesheet" href="{{asset('/public/media/css/style.css')}}"/>
 
	@section ('styles')
	@show
 
	@section ('scripts')
	<script src="{{ asset('public/js/app.js?time='.time()) }}"></script>
	@show
   </head>
   	<body>
   		<header id="header">
   		 <h1 id="logotext"> MadLocks </h1>	
   		 <img id="logo" src="{{asset('/public/media/img/logo.png')}}"/>
   		
		@guest
         <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
             @if (Route::has('register'))
			<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
                     @else
                     <a href="{{asset('home')}}" class="nav-link">
                    {{ Auth::user()->name }} 
                     </a>
						<div>
                         <a  href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>
		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;", "font-size: 20px;"
	"float: left";
	"color: #565656">
                              @csrf
          </form>
						</div>
                            @endguest
		</header>
		
		
   		
   		
		<nav class="topmenu">

		<a href="{{asset('/')}}">Главная</a>
   	 	<a href="{{asset('HAirMaster')}}">Наши мастера</a>
		<a class="btn btn-secondary dropdown-toggle " href="{{asset('categories')}}" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" 
		a href="{{asset('services')}}">
				Услуги</a>
			<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					@foreach ($v_catalogs as $one)
				<a href="{{asset('catalog/'.$one->id)}}" class="btn btn-default btn-block">{{$one->name}}</a>
			@endforeach 
			</div>
			
		<a href="{{asset('map')}}" >Карта проезда</a>
   	 	<a href="{{asset('contacts')}}" >Контакты</a>
	   	</nav>
   		<main class="row">
   		  <aside class="col-md-2">
			<a href="{{asset('photo')}}" class="btn btn-secondary btn-block">Галерея</a> 
			<a href="{{asset('price')}}" class="btn btn-secondary btn-block">Прайс-лист</a>
			<a href="{{asset('feedback')}}" class="btn btn-secondary btn-block">Отзывы</a>
			<a href="{{asset('basket')}}" class="btn btn-secondary btn-block">Мне понравилось ({{$cookie_count}})</a>
		  </aside>
		 
			<article class="col-md-8 mainblock"> 
			@yield('content')
			</article>

         
			<aside class="col-md-2"> 
        
			<aside id="dev_widget_preview" class="dev_widget_preview" style="width: 300px; height: 280px; background: none;">
			<!--<iframe name="fXDc71ab" frameborder="0" 
			src=  https://vk.com/widget_community.php?app=1936057&amp;width=200px&amp;_ver=1&amp;gid=34188066&amp;mode=3&amp;color1=&amp;color2=&amp;color3=&amp;class_name=&amp;url=https%3A%2F%2Fvk.com%2Fdev%2FCommunity%3Fheight%3D400%26link%3Dhttps%253A%252F%252Fvk.com%252Fcreative_studio_jh%26mode%3D3%26no_cover%3D%26oid%3D-34188066%26wide%3D&amp;referrer=https%3A%2F%2Fwww.kasper.by%2F&amp;title=%D0%92%D0%B8%D0%B4%D0%B6%D0%B5%D1%82%20%D0%B4%D0%BB%D1%8F%20%D1%81%D0%BE%D0%BE%D0%B1%D1%89%D0%B5%D1%81%D1%82%D0%B2%20%7C%20%D0%A0%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D1%87%D0%B8%D0%BA%D0%B0%D0%BC&amp;166a2723370
			width="200" height="185" scrolling="no" id="vkwidget16" style="overflow: hidden; height: 190px;">
			</iframe>-->
			</aside>
			</aside>
		</main>
		
   		<br style="clear:both" />
		
   		<footer class="footer">
   			2018 &copy; AlesyaValko
   		</footer>
   	  
   	</body>
	 
	<!-- <video autoplay loop muted="0">
   <source src="{{asset('public/Video.mp4')}}" type="video/mp4">
</video> -->

 </html>