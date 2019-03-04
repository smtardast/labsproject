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
				<li><a href="{{route('home')}}">Home</a></li>
				<li  class="active"><a href="{{route('servicepage.index')}}">Services</a></li>
				<li><a href="{{route('blogpage.index')}}">Blog</a></li>
				<li><a href="{{route('contact')}}">Contact</a></li>
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
				<h2>Services</h2>
				<div class="page-links">
					<a href="#">Home</a>
					<span>Services</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end-->


	@include('components.services')


	<!-- features section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
					<h2>{{$contents->projectstitle}}</h2>
			</div>
			<div class="row">
				
					<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
						@foreach ($projects as $item)
						<div class="icon-box light left">
							<div class="service-text">
							<h2>{{$item->title}}</h2>
								<p>{{$item->text}}</p>
							</div>
							<div class="icon">
								<i class="{{$item->icon->code}}"></i>
							</div>
						</div>
						@endforeach
				</div>
				
				
				
				<!-- Devices -->
				<div class="col-md-4 col-sm-4 devices">
					<div class="text-center">
						<img src="img/device.png" alt="">
					</div>
				</div>
				
					<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
						@foreach ($projects2 as $item)
						<div class="icon-box light left">
							<div class="icon">
								<i class="{{$item->icon->code}}"></i>
							</div>
							<div class="service-text">
							<h2>{{$item->title}}</h2>
								<p>{{$item->text}}</p>
							</div>
						</div>
						@endforeach
				</div>
				
				</div>
			</div>
			<div class="text-center mt100">
				<a href="{{route('servicepage.index')}}" class="site-btn">Browse</a>
			</div>
		</div>
	</div>
	<!-- features section end-->


	<!-- services card section-->
	<div class="services-card-section spad">
		<div class="container">
			<div class="row">
				@foreach ($projects as $item)
					<!-- Single Card -->
				<div class="col-md-4 col-sm-6">
						<div class="sv-card">
							<div class="card-img">
							<img src="{{Storage::disk('project')->url($item->image)}}" alt="">
							</div>
							<div class="card-text">
								<h2>{{$item->title}}</h2>
								<p>{{$item->text}}</p>
							</div>
						</div>
					</div>
				@endforeach
				
			</div>
		</div>
	</div>
	<!-- services card section end-->


@include('components.newsletter')


	@include('components.contact')

@endsection