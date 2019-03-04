@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Create a tag</h1>
@stop

@section('content')


<form action="{{route('tag.update', ['tag'=>$tag->id])}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="">Create a tag</label>
      <input type="text"
        class="form-control" name="tag" id="" aria-describedby="helpId" placeholder="" value="{{old('tag',$tag->tag)}}">
      
    </div>

    <button type="submit">Submit</button>
</form>

@stop
