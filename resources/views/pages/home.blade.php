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
				<li class="active"><a href="{{route('home')}}">Home</a></li>
				<li><a href="{{route('servicepage.index')}}">Services</a></li>
				<li><a href="{{route('blogpage.index')}}">Blog</a></li>
				<li><a href="{{route('contact')}}">Contact</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->
	
<!-- Intro Section -->
<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center p-5">
				<img  class="pt-5" src="img/big-logo.png" alt="">
			<p class="" >{{$contentsH->subtitle}}</p>
			</div>
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">
			@foreach ($carousels as $item)
				
		<div class="item  hero-item" data-bg="{{Storage::disk('carousel')->url($item->image)}}"></div>
			@endforeach
			
		</div>
	</div>
	<!-- Intro Section -->


	<!-- About section -->
	<div class="about-section">
		<div class="overlay"></div>
		<!-- card section -->
		<div class="card-section">
			<div class="container">
				<div class="row">
					@foreach ($projects as $item)
						
					<!-- single card -->
					<div class="col-md-4 col-sm-6">
						<div class="lab-card">
							<div class="icon">
							<i class="{{$item->icon->code}}"></i>
							</div>
							<h2>{{$item->title}}</h2>
							<p>{{$item->text}}</p>
						</div>
					</div>
					@endforeach
					
				</div>
			</div>
		</div>
		<!-- card section end-->


		<!-- About contant -->
		<div class="about-contant">
			<div class="container">
				<div class="section-title">
					<h2>{{$contentsH->descriptiontitle}}</h2>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p>{{$contentsH->description}}</p>
					</div>
					<div class="col-md-6">
						<p>{{$contentsH->description2}}</p>
					</div>
				</div>
				<div class="text-center mt60">
					<a href="{{route('blogpage.index')}}" class="site-btn">Browse</a>
				</div>
				<!-- popup video -->
				<div class="intro-video">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<img src="img/video.jpg" alt="">
							<a href="{{$contentsH->video}}" class="video-popup">
								<i class="fa fa-play"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About section end -->


	<!-- Testimonial section -->
	<div class="testimonial-section pb100">
		<div class="test-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4">
					<div class="section-title left">
						<h2>{{$contentsH->clienttitle}}</h2>
					</div>
					<div class="owl-carousel" id="testimonial-slide">
						@foreach ($clients as $item)
							
						<!-- single testimonial -->
						<div class="testimonial">
							<span>‘​‌‘​‌</span>
						<p>{{$item->text}}</p>
							<div class="client-info">
								<div class="avatar">
									<img src="{{Storage::disk('client')->url($item->image)}}" alt="">
								</div>
								<div class="client-name">
									<h2>{{$item->name}}</h2>
									<p>{{$item->job}}</p>
								</div>
							</div>
						</div>
						@endforeach
						<div >
								{{$clients->links()}}
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial section end-->


	@include('components.services')


	<!-- Team Section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>{{$contentsH->teamtitle}}</h2>
			</div>
			<div class="row">
				@foreach ($teams as $item)
					
				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						
						<img src="{{Storage::disk('profile')->url($item->profile->image)}}" alt="">
					<h2>{{$item->name}}</h2>
						<h3>{{$item->profile->job}}</h3>
					</div>
				</div>
				@endforeach
				<div class="page-pagination">
						{{$teams->links()}}
					</div>
				  
			</div>
		</div>
	</div>
	<!-- Team Section end-->


	<!-- Promotion section -->
	<div class="promotion-section">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h2>{{$contentsH->browsetitle}}</h2>
					<p>{{$contentsH->browsesubtitle}}</p>
				</div>
				<div class="col-md-3">
					<div class="promo-btn-area">
						<a href="{{route('contact')}}" class="site-btn btn-2">Browse</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Promotion section end-->


	@include('components.contact')




@endsection