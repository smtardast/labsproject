@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1>Services</h1>
@stop

@section('content')
<form action="{{route('service.update', ['service'=>$service->id])}}" method="post">
        @method('PUT')
        @csrf

        <div class="form-group">
          <label for="">Title</label>
          <input type="text"
        class="form-control" name="title" id="" aria-describedby="helpId" placeholder="" value="{{old('title', $service->title)}}">
        </div>
        <div class="form-group">
          <label for="">Text</label>
          <textarea class="form-control" name="text" id="" rows="3">{{old('text', $service->text)}}</textarea>
        </div>
        
        <div class="form-group">
          <label for="">Icon</label>
          <select class="form-control" name="icon_id" id="">
            @foreach ($icons as $item)
          <option value="{{$item->id}}">
          {{$item->code}}
        </option>
            @endforeach
          </select>
        </div>
        <button type="submit">Submit</button>
    </form>
@stop