@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

<h2>Articles to validate: {{$articlestovalidate}}</h2>
<h2>Comments to validate: {{$commstovalidate}}</h2>

<div class="row">
    <div class="btn-group" role="group" aria-label="Basic example">  
        <a href="{{route('user.index')}}">
            
            <button type="button" class="btn btn-outline-danger btn-lg">All users</button>
        </a>
        <a href="{{route('user.create')}}">
            <button type="button" class="btn btn-outline-danger btn-lg">Create users</button>
            
        </a>

    </div>

</div>

<div class="row">

    <div class="btn-group" role="group" aria-label="Basic example">
            <a href="{{route('article.index')}}">
            
                <button type="button" class="btn btn-outline-danger btn-lg">All articles</button>
            </a> 
    <a href="{{route('validateplz')}}">
        <button type="button" class="btn btn-outline-danger btn-lg">Articles to validate: {{$articlestovalidate}}</button>
        </a>        
    <a href="{{route('article.create')}}">
        <button type="button" class="btn btn-outline-danger btn-lg">Create an article</button> 
        </a> 
    
    </div>
</div>

<div class="row">

    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{route('service.index')}}">

            <button type="button" class="btn btn-outline-danger btn-lg">All services</button>
        </a>
        <a href="{{route('service.create')}}">

            <button type="button" class="btn btn-outline-danger btn-lg">Create services</button>
        </a>
       
    </div>
</div>

<div class="row">
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{route('project.index')}}">

            <button type="button" class="btn btn-outline-danger btn-lg">All projects</button>
        </a>
        <a href="{{route('project.create')}}">

            <button type="button" class="btn btn-outline-danger btn-lg">Create projects</button>
        </a>
     
    </div>

</div>

<div class="row">

    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{route('client.index')}}">

            <button type="button" class="btn btn-outline-danger btn-lg">All clients</button>
        </a>
        <a href="{{route('client.create')}}">

            <button type="button" class="btn btn-outline-danger btn-lg">Create clients</button>
        </a>
       
        
    </div>
</div>

<div class="row">
    <div class="btn-group" role="group" aria-label="Basic example">
      <a href="{{route('comment.index')}}">
          <button type="button" class="btn btn-outline-danger btn-lg">All comments</button>
          </a>  
      <a href="{{route('comment.create')}}">
          <button type="button" class="btn btn-outline-danger btn-lg">Validate comments: {{$commstovalidate}}</button>
          </a>    
        
    </div>

</div>

{{-- <div class="row">
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{route('')}}">

            <button type="button" class="btn btn-outline-danger btn-lg">Content of homepage</button>
        </a>
        <a href="{{route('')}}">

            <button type="button" class="btn btn-outline-danger btn-lg">Content of contact form</button>
        </a>
        <a href="{{route('')}}">

            <button type="button" class="btn btn-outline-danger btn-lg">Content of blogpage</button>
        </a>
        <a href="{{route('')}}">

            <button type="button" class="btn btn-outline-danger btn-lg">Content of service page</button>
        </a>

        
    </div>
</div> --}}

<div class="row">
        <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{route('tag.index')}}">
            
            <button type="button" class="btn btn-outline-danger btn-lg">All tags</button>
        </a>

        </div>
    </div>

    <div class="row">
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="{{route('category.index')}}">

                    <button type="button" class="btn btn-outline-danger btn-lg">All categories</button>
                </a>
                
            </div>
        </div>




@stop