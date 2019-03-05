@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Create a category</h1>
@stop

@section('content')


<form action="{{route('category.update', ['category'=>$category->id])}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="">Edit a category</label>
      <input type="text"
        class="form-control" name="category" id="" aria-describedby="helpId" placeholder="" value="{{old('category',$category->category)}}">
      
    </div>

    <button type="submit">Submit</button>
</form>

@stop
