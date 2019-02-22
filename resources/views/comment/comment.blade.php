@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Comments</h1>
@stop

@section('content')
@foreach ($comments as $item)
    <h3>{{$item->title}}</h3>
    <h4>{{$item->name}}</h4>
    <p>{{$item->text}}</p>
    <p>{{$item->email}}</p>


@if ($item->validated==null)
<form action="{{route('comment.update',['comment'=>$item->id])}}" method="post">
        @method('PUT')
        @csrf
    <select name="{{$item->validated}}" id="">
    <option value="null">Not validated</option>
    <option value="yes">Validated</option>
    
        </select>
        <button type="submit">Validate</button>
    </form>
@endif
    
    <form action="{{route('comment.destroy',['comment'=>$item->id])}}" method="POST">
            @method('DELETE')
        @csrf
    
        <button type="submit" class="btn btn-danger">Delete</button>
        </form>
@endforeach
@stop
