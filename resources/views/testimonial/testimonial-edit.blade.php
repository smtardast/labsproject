@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Clients</h1>
@stop
@section('content')
{{-- @can('admin') --}}
{{-- {{dd($testimonial}} --}}
    
<form action="{{route('testimonial.update', ['testimonial'=>$testimonial->id])}}" method="post" enctype="multipart/form-data">
@method('PUT')
    @csrf
    
  
    <div class="form-group">
      <label for="">Client comment</label>
       @if ($errors->has('text'))
      @foreach ($errors->get('text') as $error)
    <p class="text-danger">{{$errors->first('text')}}</p>
      @endforeach
    @endif
    <textarea class="form-control" name="text" id="" rows="3">{{old('text', $testimonial->text)}}</textarea>
    </div>

   

    <button type="submit">Submit</button>

</form>
{{-- @endcan --}}

@stop