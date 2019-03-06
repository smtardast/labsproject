@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Clients</h1>
@stop

@section('content')
@can('admin')
    
<form action="{{route('client.store')}}" method="post" enctype="multipart/form-data">

    @csrf
    
    <div class="form-group">
      <label for="">Name</label>
       @if ($errors->has('name'))
      @foreach ($errors->get('name') as $error)
    <p class="text-danger">{{$errors->first('name')}}</p>
      @endforeach
    @endif
      <input type="text"
        class="form-control" name="name" id="" aria-describedby="helpId" >
    </div>

    <div class="form-group">
        <label for="">Job title</label>
         @if ($errors->has('job'))
      @foreach ($errors->get('job') as $error)
    <p class="text-danger">{{$errors->first('job')}}</p>
      @endforeach
    @endif
        <input type="text"
          class="form-control" name="job" id="" aria-describedby="helpId" placeholder="">
      </div>

    <div class="form-group">
      <label for="">Client comment</label>
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

    <button type="submit">Submit</button>

</form>
@endcan

@stop