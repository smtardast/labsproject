@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Contact inquiries</h1>
@stop

@section('content')
    @foreach ($contacts as $item)
    <div class="jumbotron">
    <h1 class="display-4">{{$item->title}}</h1>

            <p class="lead">{{$item->text}}</p>
            <hr class="my-4">
            <h4>{{$item->name}}</h4>
            <p>{{$item->email}}</p>
            <hr class="my-4">
            @if ($item->reply==null)
    <a class="btn btn-primary btn-lg" href="{{route('contact.edit', ['contact'=>$item->id])}}" role="button">Reply</a>
            @else
            <p>{{$item->reply}}</p>
            @endif
          </div>
    @endforeach
@stop