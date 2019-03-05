@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Projects</h1>
@stop

@section('content')
@can('admin')
    
<a name="" id="" class="btn btn-primary" href="{{route('project.create')}}" role="button">Create a new project</a>
   @foreach ($projects as $item)
   <div class="card" style="width: 18rem;">
   <img src="{{Storage::disk('project')->url($item->image)}}" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">{{$item->title}}</h5>
          <p class="card-text">{{$item->text}}</p>
          <i class="{{$item->icon->code}}"></i>
        <a href="{{route('project.edit', ['project'=>$item->id])}}" class="btn btn-primary">Edit</a>
          <form action="{{route('project.destroy', ['project'=>$item->id])}}" method="POST">
              @method('DELETE')
              @csrf
              
              <button type="submit" class="btn btn-danger">Delete</button>
          </form>
          
        </div>
      </div>
   @endforeach
@endcan
@stop