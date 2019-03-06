@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Create a tag</h1>
@stop

@section('content')
@can('admin')
    
<form action="{{route('tag.update', ['tag'=>$tag->id])}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="">Create a tag</label>
      @if ($errors->has('tag'))
      @foreach ($errors->get('tag') as $error)
    <p class="text-danger">{{$errors->first('tag')}}</p>
      @endforeach
    @endif
      <input type="text"
        class="form-control" name="tag" id="" aria-describedby="helpId" placeholder="" value="{{old('tag',$tag->tag)}}">
      
    </div>
@can('admin')
    
<button type="submit">Submit</button>
@endcan
</form>
@endcan


@stop
