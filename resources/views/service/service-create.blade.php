@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1>Services</h1>
@stop

@section('content')
@can('admin')
    


<form action="{{route('service.store')}}" method="post">

    

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
            <label for="">Icon</label>
            @foreach ($icons as $item)
              <input name="icon_id" type="radio" value="{{$item->id}}"><i class="{{$item->code}} fa-3x"></i>
            
              @endforeach
          </div>

       <button type="submit">Submit</button>
   </form>
@endcan
@stop