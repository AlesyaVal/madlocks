<!DOCTYPE html>
<html lang="ru">
 <head>
   <meta charset="utf-8">
   <meta name="description" content="1, 2, 3 предложения">
   <meta name="keywords" content="выражения через ,">
   <meta name="author" content="">
   <title> название сайта </title>
   <link  type="text/css" rel="stylesheet" href="{{asset('/public/media/bootstrap/css/bootstrap.min.css')}}"/>
   <link  type="text/css" rel="stylesheet" href="{{asset('/public/media/css/style.css')}}"/>
 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <style>
body {
 position: relative;
 overflow-x: hidden;
}
body,
html { height: 100%;}
.nav .open > a, 
.nav .open > a:hover, 
.nav .open > a:focus {background-color: transparent;}
/* Wrappers */
#wrapper {
 padding-left: 0;
 -webkit-transition: all 0.5s ease;
 -moz-transition: all 0.5s ease;
 -o-transition: all 0.5s ease;
 transition: all 0.5s ease;
}
#wrapper.toggled {
 padding-left: 220px;
}
#sidebar-wrapper {
 z-index: 1000;
 left: 220px;
 width: 0;
 height: 100%;
 margin-left: -220px;
 overflow-y: auto;
 overflow-x: hidden;
 background: #1a1a1a;
 -webkit-transition: all 0.5s ease;
 -moz-transition: all 0.5s ease;
 -o-transition: all 0.5s ease;
 transition: all 0.5s ease;
}
#sidebar-wrapper::-webkit-scrollbar {
 display: none;
}
#wrapper.toggled #sidebar-wrapper {
 width: 220px;
}
#page-content-wrapper {
 width: 100%;
 padding-top: 70px;
}
#wrapper.toggled #page-content-wrapper {
 position: absolute;
 margin-right: -220px;
}
/* Sidebar nav styles */
.sidebar-nav {
 position: absolute;
 top: 0;
 width: 220px;
 margin: 0;
 padding: 0;
 list-style: none;
}
.sidebar-nav li {
 position: relative; 
 line-height: 20px;
 display: inline-block;
 width: 100%;
}

.sidebar-nav li:before {
 content: '';
 position: absolute;
 top: 0;
 left: 0;
 z-index: -1;
 height: 100%;
 width: 3px;
 background-color: #1c1c1c;
 -webkit-transition: width .2s ease-in;
 -moz-transition: width .2s ease-in;
 -ms-transition: width .2s ease-in;
 transition: width .2s ease-in;

}

.sidebar-nav li:first-child a {
 color: #fff;
 background-color: #1a1a1a;
}
.sidebar-nav li:nth-child(2):before {
 background-color: #ec1b5a; 
}
.sidebar-nav li:nth-child(3):before {
 background-color: #79aefe; 
}
.sidebar-nav li:nth-child(4):before {
 background-color: #314190; 
}
.sidebar-nav li:nth-child(5):before {
 background-color: #279636; 
}
.sidebar-nav li:nth-child(6):before {
 background-color: #7d5d81; 
}
.sidebar-nav li:nth-child(7):before {
 background-color: #ead24c; 
}
.sidebar-nav li:nth-child(8):before {
 background-color: #2d2366; 
}
.sidebar-nav li:nth-child(9):before {
 background-color: #35acdf; 
}
.sidebar-nav li:hover:before,
.sidebar-nav li.open:hover:before {
 width: 100%;
 -webkit-transition: width .2s ease-in;
 -moz-transition: width .2s ease-in;
 -ms-transition: width .2s ease-in;
 transition: width .2s ease-in;

}
.sidebar-nav li a {
 display: block;
 color: #ddd;
 text-decoration: none;
 padding: 10px 15px 10px 30px; 
}

.sidebar-nav li a:hover,
.sidebar-nav li a:active,
.sidebar-nav li a:focus,
.sidebar-nav li.open a:hover,
.sidebar-nav li.open a:active,
.sidebar-nav li.open a:focus{
 color: #6c757d;
 text-decoration: none;
 background-color: transparent;
}

.sidebar-nav > .sidebar-brand {
 height: 65px;
 font-size: 20px;
 line-height: 44px;
}
.sidebar-nav .dropdown-menu {
 position: relative;
 width: 100%;
 padding: 0;
 margin: 0;
 border-radius: 0;
 border: none;
 background-color: #222;
 box-shadow: none;
}
/* Hamburger-Cross */
.hamburger {
 position: fixed;
 top: 20px; 
 z-index: 999;
 display: block;
 width: 32px;
 height: 32px;
 margin-left: 15px;
 background: transparent;
 border: none;
}
.hamburger:hover,
.hamburger:focus,
.hamburger:active {
 outline: none;
}
.hamburger.is-closed:before {
 content: '';
 display: block;
 width: 100px;
 font-size: 14px;
 color: #fff;
 line-height: 32px;
 text-align: center;
 opacity: 0;
 -webkit-transform: translate3d(0,0,0);
 -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-closed:hover:before {
 opacity: 1;
 display: block;
 -webkit-transform: translate3d(-100px,0,0);
 -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-closed .hamb-top,
.hamburger.is-closed .hamb-middle,
.hamburger.is-closed .hamb-bottom,
.hamburger.is-open .hamb-top,
.hamburger.is-open .hamb-middle,
.hamburger.is-open .hamb-bottom {
 position: absolute;
 left: 0;
 height: 4px;
 width: 100%;
}
.hamburger.is-closed .hamb-top,
.hamburger.is-closed .hamb-middle,
.hamburger.is-closed .hamb-bottom {
 background-color: #1a1a1a;
}
.hamburger.is-closed .hamb-top { 
 top: 5px; 
 -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-closed .hamb-middle {
 top: 50%;
 margin-top: -2px;
}
.hamburger.is-closed .hamb-bottom {
 bottom: 5px; 
 -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-closed:hover .hamb-top {
 top: 0;
 -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-closed:hover .hamb-bottom {
 bottom: 0;
 -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-open .hamb-top,
.hamburger.is-open .hamb-middle,
.hamburger.is-open .hamb-bottom {
 background-color: #1a1a1a;
}
.hamburger.is-open .hamb-top,
.hamburger.is-open .hamb-bottom {
 top: 50%;
 margin-top: -2px; 
}
.hamburger.is-open .hamb-top { 
 -webkit-transform: rotate(45deg);
 -webkit-transition: -webkit-transform .2s cubic-bezier(.73,1,.28,.08);
}
.hamburger.is-open .hamb-middle { display: none; }
.hamburger.is-open .hamb-bottom {
 -webkit-transform: rotate(-45deg);
 -webkit-transition: -webkit-transform .2s cubic-bezier(.73,1,.28,.08);
}
.hamburger.is-open:before {
 content: '';
 display: block;
 width: 100px;
 font-size: 14px;
 color: #fff;
 line-height: 32px;
 text-align: center;
 opacity: 0;
 -webkit-transform: translate3d(0,0,0);
 -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-open:hover:before {
 opacity: 1;
 display: block;
 -webkit-transform: translate3d(-100px,0,0);
 -webkit-transition: all .35s ease-in-out;
}
/* Overlay */
.overlay {
 position: fixed;
 display: none;
 width: 100%;
 height: 100%;
 top: 0;
 left: 0;
 right: 0;
 bottom: 0;
 background-color: #343a40;
 z-index: -10;
}
</style>

 <div id="wrapper">
 <div class="overlay"></div>
 
 <!-- Sidebar -->
 <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
 <ul class="nav sidebar-nav">
 <li class="sidebar-brand">
 <a href="#"> Madlocks </a>
 </li>
 <li>
 <a href="{{asset('/')}}">Главная</a>
 </li>
 <li>
 <a href="{{asset('HAirMaster')}}">Наши мастера</a>
 </li>
 <li>
 <a href="{{asset('basket')}}" >Мне понравилось ({{$cookie_count}})</a>
 </li>
 <li>
 <a href="{{asset('map')}}">Карта проезда</a>
 </li>
 <li class="dropdown">
 <a href="{{asset('categories')}}" class="dropdown-toggle" data-toggle="dropdown">Услуги<span class="caret"></span></a>
 <ul class="dropdown-menu" role="menu">
  @foreach ($v_catalogs as $one)
        <a href="{{asset('catalog/'.$one->id)}}" >{{$one->name}}</a>
      @endforeach  
 </ul>
 </li>
 <li>
 <a href="{{asset('feedback')}}" >Отзывы</a> 
 </li>
 <li>
 <a href="{{asset('contacts')}}">Контакты</a>
 </li>
 </ul>
 </nav>
 <!-- /#sidebar-wrapper -->

 <!-- Page Content -->
 <div id="page-content-wrapper">
 <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
 <span class="hamb-top"></span>
 <span class="hamb-middle"></span>
 <span class="hamb-bottom"></span>
 </button>
 </div>
 <!-- /#page-content-wrapper -->

 </div>
 <!-- /#wrapper -->

<script>
$(document).ready(function () {
 var trigger = $('.hamburger'),
 overlay = $('.overlay'),
 isClosed = false;

 trigger.click(function () {
 hamburger_cross(); 
 });

 function hamburger_cross() {

 if (isClosed == true) { 
 overlay.hide();
 trigger.removeClass('is-open');
 trigger.addClass('is-closed');
 isClosed = false;
 } else { 
 overlay.show();
 trigger.removeClass('is-closed');
 trigger.addClass('is-open');
 isClosed = true;
 }
 }
 
 $('[data-toggle="offcanvas"]').click(function () {
 $('#wrapper').toggleClass('toggled');
 }); 
});
</script>

	@section ('styles')
	@show
 
	@section ('scripts')
	<script src="{{ asset('public/js/app.js?time='.time()) }}"></script>
	@show
   </head>
   	<body>

   		<header id="header">
   		 <h1 id="logotext"> MadLocks </h1>	
   		<!--  <img id="logo" src="{{asset('/public/media/img/logo.png')}}"/> -->
   				</header>
		
		
   <!-- 	@include('templates.topmenu') -->

<!-- <div class="body">
    <div class="body__video-wrapp">
        <div class="body__video-box">
           <video  class="header__video"  autoplay loop muted="0">
                  <source src="{{asset('public/Video.mp4')}}" type="video/mp4">
          </video> 
        </div>
    </div>
    <div class='body__video-play' onclick='document.getElementById("body__video").play();'>play</div>
</div> -->



   		<main class="row">

   		<aside class="col-md-2">
			<!-- <a href="{{asset('photo')}}" class="btn btn-secondary btn-block">Галерея</a> 
			<a href="{{asset('price')}}" class="btn btn-secondary btn-block">Прайс-лист</a> -->
		 <aside id="dev_widget_preview" class="dev_widget_preview" style="width: 300px; height: 280px; background: none;">
    <iframe name="fXDc71ab" frameborder="0" 
    src=  https://vk.com/widget_community.php?app=1936057&amp;width=200px&amp;_ver=1&amp;gid=34188066&amp;mode=3&amp;color1=&amp;color2=&amp;color3=&amp;class_name=&amp;url=https%3A%2F%2Fvk.com%2Fdev%2FCommunity%3Fheight%3D400%26link%3Dhttps%253A%252F%252Fvk.com%252Fcreative_studio_jh%26mode%3D3%26no_cover%3D%26oid%3D-34188066%26wide%3D&amp;referrer=https%3A%2F%2Fwww.kasper.by%2F&amp;title=%D0%92%D0%B8%D0%B4%D0%B6%D0%B5%D1%82%20%D0%B4%D0%BB%D1%8F%20%D1%81%D0%BE%D0%BE%D0%B1%D1%89%D0%B5%D1%81%D1%82%D0%B2%20%7C%20%D0%A0%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D1%87%D0%B8%D0%BA%D0%B0%D0%BC&amp;166a2723370
    width="200" height="185" scrolling="no" id="vkwidget16" style="overflow: hidden; height: 190px;">
    </iframe>
    </aside>
		  </aside>
   		<article class="col-md-8 mainblock"> 
		
		@yield('content')
		</article>
           
   		
   		<aside class="col-md-2"> 
     @guest
         <a class="btn btn-default btn-block" href="{{ route('login') }}" >{{ __('Login') }}</a>
             @if (Route::has('register'))
      <a class="btn btn-default btn-block" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
                     @else
                     <a class="btn btn-default btn-block" href="{{asset('home')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                     </a>
            <div >
                         <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
          </form>
                        </div>
                            @endguest
       <!--  <aside id="dev_widget_preview" class="dev_widget_preview" style="width: 300px; height: 280px; background: none;">
		<iframe name="fXDc71ab" frameborder="0" 
		src=  https://vk.com/widget_community.php?app=1936057&amp;width=200px&amp;_ver=1&amp;gid=34188066&amp;mode=3&amp;color1=&amp;color2=&amp;color3=&amp;class_name=&amp;url=https%3A%2F%2Fvk.com%2Fdev%2FCommunity%3Fheight%3D400%26link%3Dhttps%253A%252F%252Fvk.com%252Fcreative_studio_jh%26mode%3D3%26no_cover%3D%26oid%3D-34188066%26wide%3D&amp;referrer=https%3A%2F%2Fwww.kasper.by%2F&amp;title=%D0%92%D0%B8%D0%B4%D0%B6%D0%B5%D1%82%20%D0%B4%D0%BB%D1%8F%20%D1%81%D0%BE%D0%BE%D0%B1%D1%89%D0%B5%D1%81%D1%82%D0%B2%20%7C%20%D0%A0%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D1%87%D0%B8%D0%BA%D0%B0%D0%BC&amp;166a2723370
		width="200" height="185" scrolling="no" id="vkwidget16" style="overflow: hidden; height: 190px;">
		</iframe>
		</aside> -->

   		</aside>
		</main>
   		<br style="clear:both" />
   		<footer class="footer">
   			2018 &copy; AlesyaValko
   		</footer>
   	  
   	</body>
	 
	 <video autoplay loop muted="0">
   <source src="{{asset('public/Video.mp4')}}" type="video/mp4">
</video> 

 </html>
