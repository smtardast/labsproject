@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Services</h1>
@stop

@section('content')
@can('admin')
    
<a name="" id="" class="btn btn-primary" href="{{route('service.create')}}" role="button">Create a service</a>

@foreach ($services as $item)

<i class="{{$item->icon->code}}"></i>
<p>{{$item->icon_id}}</p>
<h2>{{$item->title}}</h2>
<p>{{$item->text}}</p>

<a name="" id="" class="btn btn-primary" href="{{route('service.edit', ['service'=>$item->id])}}" role="button">Edit</a>
<form action="{{route('service.destroy', ['service'=>$item->id])}}" method="POST">
        @method('DELETE')
        @csrf
        
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endforeach
@endcan
@stop