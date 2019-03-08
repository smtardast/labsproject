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
        @if(session()->get('message'))
        <div class="alert alert-{{session()->get('message')}}" role="alert">
         {{session()->get('textmessage')}}
        </div>
        @endif
    
        <!-- page section -->
        <div class="page-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-7 blog-posts">
                        @foreach ($blogpages as $item)
                          
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
                                        <a href="">{{count($item->comments->where('validated', true))}} Comments</a>
                                    </div>
                                <p class="text-break" wrap="hard">{!! str_limit($item->text, 330) !!}</p>
                                <a href="{{route('blogpage.show',['blogpage'=>$item->id])}}" class="read-more">Read More</a>
                                </div>
                            </div>
                          
                        @endforeach
                        
                      
                      
                    </div>
                    @include('components.sidebar')
                </div>
            </div>
        </div>
        <!-- page section end-->
    
    
        @include('components.newsletter')

@endsection