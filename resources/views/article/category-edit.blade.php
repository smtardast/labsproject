@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Create a category</h1>
@stop

@section('content')
@can('admin')
    
<form action="{{route('category.update', ['category'=>$category->id])}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="">Edit a category</label>
      @if ($errors->has('category'))
      @foreach ($errors->get('category') as $error)
    <p class="text-danger">{{$errors->first('category')}}</p>
      @endforeach
    @endif
      <input type="text"
        class="form-control" name="category" id="" aria-describedby="helpId" placeholder="" value="{{old('category',$category->category)}}">
      
    </div>
@can('admin')
    
<button type="submit">Submit</button>
@endcan
</form>
@endcan


@stop
