@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Articles</h1>
@stop

@section('content')
@can('editor')

<a name="" id="" class="btn btn-dark" href="{{route('article.create')}}" role="button">Create an article</a>
    @foreach ($articles as $item)
    {{-- {{dd($item->id)}} --}}
    @can('update', $item)
        
    <h2>{{$item->title}}</h2>
    <img src="{{Storage::disk('article')->url($item->image)}}" alt="">
    <p>{!!($item->text)!!}</p>
    <p>{{$item->user->name}}</p>
    <p>{{$item->category->category}}</p>
    {{-- <p>{{$item->tag->tag}}</p> --}}
    @foreach ($item->tags as $item2)
    <p>{{$item2->name}}</p>
    @endforeach
    
    @can('admin')
        
    <form action="{{route('validate.article',['article'=>$item->id])}}" method="post">
            @method('PUT')
            @csrf
        
        <button type="submit">Validate</button>
        </form>
    @endcan



<a name="" id="" class="btn btn-secondary" href="{{route('article.edit', ['article'=>$item->id])}}" role="button">Edit</a>

<form action="{{route('article.destroy', ['article'=>$item->id])}}" method="POST">
    @method('DELETE')
    @csrf
    
    <button type="submit" class="btn btn-danger">Delete</button>
</form>

</form>
    @endcan

    @endforeach
@endcan
@stop