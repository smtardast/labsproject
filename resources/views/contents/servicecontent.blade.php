@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Content of service page</h1>
@stop

@section('content')
@can('admin')
    
<form action="{{route('servicepage.update',['servicepage'=>$servicepage->id])}}" method="post">
        @method('PUT')
        @csrf

        <div class="form-group">
          <label for="">Service section's title</label>
           @if ($errors->has('servicetitle'))
      @foreach ($errors->get('servicetitle') as $error)
    <p class="text-danger">{{$errors->first('servicetitle')}}</p>
      @endforeach
    @endif
          <input type="text"
            class="form-control" name="servicetitle" id="" aria-describedby="helpId" placeholder="" value="{{old('servicetitle',$servicepage->servicetitle)}}">
        </div>

        <div class="form-group">
            <label for="">Project section's title</label>
             @if ($errors->has('projectstitle'))
      @foreach ($errors->get('projectstitle') as $error)
    <p class="text-danger">{{$errors->first('projectstitle')}}</p>
      @endforeach
    @endif
            <input type="text"
              class="form-control" name="projectstitle" id="" aria-describedby="helpId" placeholder="" value="{{old('projectstitle',$servicepage->projectstitle)}}">
          </div>
        <button type="submit">Submit</button>

    </form>
@endcan
@stop