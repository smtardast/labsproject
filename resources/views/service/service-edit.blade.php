@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1>Services</h1>
@stop

@section('content')
@can('admin')
    
<form action="{{route('service.update', ['service'=>$service->id])}}" method="post">
        @method('PUT')
        @csrf

        <div class="form-group">
          <label for="">Title</label>
           @if ($errors->has('title'))
      @foreach ($errors->get('title') as $error)
    <p class="text-danger">{{$errors->first('title')}}</p>
      @endforeach
    @endif
          <input type="text"
        class="form-control" name="title" id="" aria-describedby="helpId" placeholder="" value="{{old('title', $service->title)}}">
        </div>
        <div class="form-group">
          <label for="">Text</label>
           @if ($errors->has('text'))
      @foreach ($errors->get('text') as $error)
    <p class="text-danger">{{$errors->first('text')}}</p>
      @endforeach
    @endif
          <textarea class="form-control" name="text" id="" rows="3">{{old('text', $service->text)}}</textarea>
        </div>
        
        <div class="form-group">
          <label for="">Icon</label>
          <select class="form-control" name="icon_id" id="">
              @foreach ($icons as $item)
              <input type="radio" value="{{$item->id}}"><i class="{{$item->code}} fa-3x"></i>
            
              @endforeach
          </select>
        </div>
        <button type="submit">Submit</button>
    </form>
@endcan
@stop