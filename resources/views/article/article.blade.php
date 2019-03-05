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
    @foreach ($item->tags as $item)
<p>{{$item->name}}</p>
    @endforeach

   @can('update', $item)
       
   <a name="" id="" class="btn btn-secondary" href="{{route('article.edit', ['article'=>$item->id])}}" role="button">Edit</a>
   
   <form action="{{route('article.destroy', ['article'=>$item->id])}}" method="POST">
       @method('DELETE')
       @csrf
       
       <button type="submit" class="btn btn-danger">Delete</button>
   </form>
   @endcan


</form>

    @endforeach
@stop