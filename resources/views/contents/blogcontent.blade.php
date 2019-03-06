@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Content of blog</h1>
@stop

@section('content')
@can('admin')
    
<form action="{{route('blogpage.update', ['blogpage'=>$blogpage->id])}}" method="post">
        @csrf
        @method('PUT')
        
        <div class="form-group">
          <label for="">Title of quote</label>
           @if ($errors->has('quotetitle'))
      @foreach ($errors->get('quotetitle') as $error)
    <p class="text-danger">{{$errors->first('quotetitle')}}</p>
      @endforeach
    @endif
          <input type="text"
            class="form-control" name="quotetitle" id="" aria-describedby="helpId" placeholder="" value="{{old('quotetitle',$blogpage->quotetitle)}}">
        </div>

        <div class="form-group">
                <label for="">Quote</label>
                 @if ($errors->has('quote'))
      @foreach ($errors->get('quote') as $error)
    <p class="text-danger">{{$errors->first('quote')}}</p>
      @endforeach
    @endif
                <input type="text"
                  class="form-control" name="quote" id="" aria-describedby="helpId" placeholder="" value="{{old('quote',$blogpage->quote)}}">
              </div>

          <button type="submit">Submit</button>
    </form>
@endcan
@stop