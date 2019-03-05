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

@can('admin')
<form action="{{route('comment.destroy',['comment'=>$item->id])}}" method="POST">
        @method('DELETE')
    @csrf

    <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endcan

    
   
@endforeach
@stop
