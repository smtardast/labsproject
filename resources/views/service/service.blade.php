@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Services</h1>
@stop

@section('content')
@can('admin')
    
<a name="" id="" class="btn btn-primary" href="{{route('service.create')}}" role="button">Create a service</a>

<div class="row">

    @foreach ($services as $item)
    
    <div class="card" style="width: 18rem;">
            
            <div class="card-body">
            
              
              <i class="{{$item->icon->code}} fa-3x"></i>
             
              <h2>{{$item->title}}</h2>
              <p>{{$item->text}}</p>
              
              <a name="" id="" class="btn btn-primary" href="{{route('service.edit', ['service'=>$item->id])}}" role="button">Edit</a>
              <form action="{{route('service.destroy', ['service'=>$item->id])}}" method="POST">
                    @method('DELETE')
                    @csrf
                    
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
</div>
    

@endcan
@stop