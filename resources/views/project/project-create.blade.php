@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1>Projects</h1>
@stop

@section('content')
@can('admin')
    
<form action="{{route('project.store')}}" method="post" enctype="multipart/form-data">

        @csrf

        <div class="form-group">
          <label for="">Title</label>
           @if ($errors->has('title'))
      @foreach ($errors->get('title') as $error)
    <p class="text-danger">{{$errors->first('title')}}</p>
      @endforeach
    @endif
          <input type="text"
            class="form-control" name="title" id="" aria-describedby="helpId" placeholder="">
         
        </div>

        <div class="form-group">
                <label for="">Text</label>
                 @if ($errors->has('text'))
      @foreach ($errors->get('text') as $error)
    <p class="text-danger">{{$errors->first('text')}}</p>
      @endforeach
    @endif
                <textarea class="form-control" name="text" id="" rows="3"></textarea>
              </div>

        <div class="form-group">
            <label for="">Image</label>
             @if ($errors->has('image'))
      @foreach ($errors->get('image') as $error)
    <p class="text-danger">{{$errors->first('image')}}</p>
      @endforeach
    @endif
            <input type="file"
                class="form-control" name="image" id="" aria-describedby="helpId" > 
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