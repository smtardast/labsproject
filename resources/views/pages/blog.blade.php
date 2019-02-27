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
				<li class="active"><a href="{{route('blogpage.index')}}">Blog</a></li>
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
                    <h2>Blog</h2>
                    <div class="page-links">
                        <a href="#">Home</a>
                        <span>Blog</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page header end-->
    
    
        <!-- page section -->
        <div class="page-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-7 blog-posts">
                        @foreach ($blogpages as $item)
                           @if ($item->verified==null)
                                <!-- Post item -->
                        <div class="post-item">
                                <div class="post-thumbnail">
                                <img src="{{Storage::disk('article')->url($item->image)}}" alt="">
                                    <div class="post-date">
                                    <h2>{{$item->day}}</h2>
                                        <h3>{{$item->month}}</h3>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <h2 class="post-title">{{$item->title}}</h2>
                                    <div class="post-meta">
                                        <a href="">{{$item->user->name}}</a>
                                        <a href="">{{$item->category->category}}</a>
                                        <a href="">2 Comments</a>
                                    </div>
                                <p>{!! str_limit($item->text, 330) !!}</p>
                                <a href="{{route('blogpage.show',['blogpage'=>$item->id])}}" class="read-more">Read More</a>
                                </div>
                            </div>
                           @endif
                        @endforeach
                        
                        <!-- Pagination -->
                        <div class="page-pagination">
                            <a class="active" href="">01.</a>
                            <a href="">02.</a>
                            <a href="">03.</a>
                        </div>
                    </div>
                    <!-- Sidebar area -->
                    <div class="col-md-4 col-sm-5 sidebar">
                        <!-- Single widget -->
                        <div class="widget-item">
                            <form action="#" class="search-form">
                                <input type="text" placeholder="Search">
                                <button class="search-btn"><i class="flaticon-026-search"></i></button>
                            </form>
                        </div>
                        <!-- Single widget -->
                        <div class="widget-item">
                            <h2 class="widget-title">Categories</h2>
                            <ul>
                                <li><a href="#">Vestibulum maximus</a></li>
                                <li><a href="#">Nisi eu lobortis pharetra</a></li>
                                <li><a href="#">Orci quam accumsan </a></li>
                                <li><a href="#">Auguen pharetra massa</a></li>
                                <li><a href="#">Tellus ut nulla</a></li>
                                <li><a href="#">Etiam egestas viverra </a></li>
                            </ul>
                        </div>
                        <!-- Single widget -->
                        <div class="widget-item">
                            <h2 class="widget-title">Instagram</h2>
                            <ul class="instagram">
                                <li><img src="img/instagram/1.jpg" alt=""></li>
                                <li><img src="img/instagram/2.jpg" alt=""></li>
                                <li><img src="img/instagram/3.jpg" alt=""></li>
                                <li><img src="img/instagram/4.jpg" alt=""></li>
                                <li><img src="img/instagram/5.jpg" alt=""></li>
                                <li><img src="img/instagram/6.jpg" alt=""></li>
                            </ul>
                        </div>
                        <!-- Single widget -->
                        <div class="widget-item">
                            <h2 class="widget-title">Tags</h2>
                            <ul class="tag">
                                <li><a href="">branding</a></li>
                                <li><a href="">identity</a></li>
                                <li><a href="">video</a></li>
                                <li><a href="">design</a></li>
                                <li><a href="">inspiration</a></li>
                                <li><a href="">web design</a></li>
                                <li><a href="">photography</a></li>
                            </ul>
                        </div>
                        <!-- Single widget -->
                        <div class="widget-item">
                            <h2 class="widget-title">Quote</h2>
                            <div class="quote">
                                <span class="quotation">‘​‌‘​‌</span>
                                <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia turpis at ultricies vestibulum.</p>
                            </div>
                        </div>
                        <!-- Single widget -->
                        <div class="widget-item">
                            <h2 class="widget-title">Add</h2>
                            <div class="add">
                                <a href=""><img src="img/add.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page section end-->
    
    
        @include('components.newsletter')

@endsection