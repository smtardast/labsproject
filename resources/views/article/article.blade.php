@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Articles</h1>
@stop

@section('content')
<a name="" id="" class="btn btn-dark" href="{{route('article.create')}}" role="button">Create an article</a>
    @foreach ($articles as $item)
    <h2>{{$item->title}}</h2>
    <img src="{{Storage::disk('article')->url($item->image)}}" alt="">
    <p>{!!($item->text)!!}</p>
    <p>{{$item->user->name}}</p>
    <p>{{$item->category->category}}</p>
    {{-- <p>{{$item->tag->tag}}</p> --}}

<a name="" id="" class="btn btn-secondary" href="{{}}" role="button">Edit</a>
    <a name="" id="" class="btn btn-danger" href="#" role="button">Delete</a>
    @endforeach
@stop