@extends('layouts.app')

@section('content')
    <!-- Header section -->
<header class="header-section">
		<div class="logo">
			<img src="{{asset('img/logo.png')}}" alt=""><!-- Logo -->
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
                        <!-- Single Post -->
                        <div class="single-post">
                            <div class="post-thumbnail">
                            <img src="{{Storage::disk('article')->url($blogpage->image)}}" alt="">
                                <div class="post-date">
                                <h2>{{$blogpage->day}}</h2>
                                    <h3>{{$blogpage->month}}</h3>
                                </div>
                            </div>
                            <div class="post-content">
                                <h2 class="post-title">{{$blogpage->title}}</h2>
                                <div class="post-meta">
                                    <a href="">{{$blogpage->user->name}}</a>
                                    <a href="">{{$blogpage->category->category}}</a>
                                    <a href="">2 Comments</a>
                                </div>
                                <p>{!!$blogpage->text!!}</p>
                            </div>
                            <!-- Post Author -->
                            <div class="author">
                                <div class="avatar">
                                    <img src="{{asset('img/avatar/03.jpg')}}" alt="">
                                </div>
                                <div class="author-info">
                                    <h2>{{$blogpage->user->name}}, <span>Author</span></h2>
                                    <p>{{$blogpage->authortext}} </p>
                                </div>
                            </div>
                            <!-- Post Comments -->
                            <div class="comments">
                            <h2>Comments {{$count}}</h2>
                                <ul class="comment-list">
                                   @foreach ($comments as $item)
                                  
                                  <li>
                                        <div class="avatar">
                                            <img src="img/avatar/01.jpg" alt="">
                                        </div>
                                        <div class="commetn-text">
                                        <h3>{{$item->name}}| {{$item->day}} | Reply</h3>
                                            <p>{{$item->text}}</p>
                                        </div>
                                    </li>
                                
                                   @endforeach
                                   
                                </ul>
                            </div>
                            <!-- Commert Form -->
                            <div class="row">
                                <div class="col-md-9 comment-from">
                                    <h2>Leave a comment</h2>
                                <form class="form-class" action="{{route('comment.store',['blogpage'=>$blogpage->id])}}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" name="name" placeholder="Your name">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" name="email" placeholder="Your email">
                                            </div>
                                            <div class="col-sm-12">
                                                <input type="text" name="title" placeholder="Subject">
                                                <textarea name="text" placeholder="Message"></textarea>

                                            <input type="hidden" name="article_id" value="{{$blogpage->id}}">
                                                <button type="submit" class="site-btn">send</button>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('components.sidebar')
                </div>
            </div>
        </div>
        <!-- page section end-->
    
        @include('components.newsletter')
        
@endsection