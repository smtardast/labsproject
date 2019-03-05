@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Carousel</h1>
@stop

@section('content')
@can('admin')
    
<form action="{{route('carousel.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="">Add an image</label>
      <input type="file"
        class="form-control" name="image" id="" aria-describedby="helpId">
    </div>
    <button class="btn btn-info" type="submit">Submit</button>
</form>

@foreach ($carousels as $item)
<div class="card" style="width: 18rem;">
<img src="{{Storage::disk('carousel')->url($item->image)}}" class="card-img-top" >
    <div class="card-body">
      <form action="{{route('carousel.destroy', ['carousel'=>$item->id])}}" method="POST">
        @method('DELETE')
        @csrf
        
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    </div>
  </div>
@endforeach
@endcan 
@stop