@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Clients</h1>
@stop

@section('content')
<div class="row">
    <a name="" id="" class="btn btn-primary" href="{{route('client.create')}}" role="button">Make a client profile</a>
</div>
@foreach ($clients as $item)
    
    <img src="{{Storage::disk('client')->url($item->image)}}" alt="">
    <h3>{{$item->name}}</h3>
    <h4>{{$item->job}}</h4>
    <p>{{$item->text}}</p>
    <a name="" id="" class="btn btn-primary" href="{{route('client.edit', ['client'=>$item->id])}}" role="button">Edit</a>
    <form action="{{route('client.destroy', ['client'=>$item->id])}}" method="POST">
        @method('DELETE')
        @csrf
        
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    
@endforeach

@stop