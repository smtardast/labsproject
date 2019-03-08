@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1>Projects</h1>
@stop

@section('content')
@can('admin')
    
<form action="{{route('project.update',['project'=>$project->id])}}" method="post" enctype="multipart/form-data">

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
            class="form-control" name="title" id="" aria-describedby="helpId" placeholder="" value="{{old('title', $project->title)}}">
         
        </div>

       <div class="form-group">
         <label for="">Text</label>
          @if ($errors->has('text'))
      @foreach ($errors->get('text') as $error)
    <p class="text-danger">{{$errors->first('text')}}</p>
      @endforeach
    @endif
         <textarea class="form-control" name="text" id="" rows="3">{{old('text', $project->text)}}</textarea>
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
            @foreach ($icons as $item)
              <input name="icon_id" type="radio" value="{{$item->id}}"><i class="{{$item->code}} fa-3x"></i>
            
              @endforeach
            </div>

            <button type="submit">Submit</button>

    </form>
@endcan
@stop