@extends('layouts.app')

@section('content')
    <!-- Header section -->
<header class="header-section">
		<div class="logo">
			<img src="img/logo.png" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li ><a href="{{route('home')}}">Home</a></li>
				<li><a href="{{route('servicepage.index')}}">Services</a></li>
				<li><a href="{{route('blogpage.index')}}">Blog</a></li>
				<li class="active"><a href="{{route('contact')}}">Contact</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
			</ul>
		</nav>
	</header>
    <!-- Header section end -->
    
	<!-- Page header -->
	<div class="page-top-section">
            <div class="overlay"></div>
            <div class="container text-right">
                <div class="page-info">
                    <h2>Contact</h2>
                    <div class="page-links">
                        <a href="#">Home</a>
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page header end -->
        @if(session()->get('message'))
        <div class="alert alert-{{session()->get('message')}}" role="alert">
         {{session()->get('textmessage')}}
        </div>
        @endif
    
        <!-- Google map -->
        <div class="map" id="map-area">
                <div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=place%20de%20la%20minoterie+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/">Plot a route map</a></iframe></div><br />
        </div>
    
    
        @include('components.contact')
@endsection