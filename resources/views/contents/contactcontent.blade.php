@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Content of contact form</h1>
@stop

@section('content')
@can('admin')
    
<form action="{{route('contactcomponent.update', ['contactcomponent'=>$contactcomponent->id])}}" method="post">
        @csrf
        @method('PUT')
        
        <div class="form-group">
          <label for="">Title</label>
           @if ($errors->has('title'))
      @foreach ($errors->get('title') as $error)
    <p class="text-danger">{{$errors->first('title')}}</p>
      @endforeach
    @endif
          <input type="text"
            class="form-control" name="title" id="" aria-describedby="helpId" placeholder="" value="{{old('title',$contactcomponent->title)}}">
        </div>

        <div class="form-group">
          <label for="">Description</label>
           @if ($errors->has('description'))
      @foreach ($errors->get('description') as $error)
    <p class="text-danger">{{$errors->first('description')}}</p>
      @endforeach
    @endif
          <textarea class="form-control" name="description" id="" rows="3">{{old('description',$contactcomponent->description)}}</textarea>
        </div>
        
        <div class="form-group">
            <label for="">Office</label>
             @if ($errors->has('office'))
      @foreach ($errors->get('office') as $error)
    <p class="text-danger">{{$errors->first('office')}}</p>
      @endforeach
    @endif
            <input type="text"
              class="form-control" name="office" id="" aria-describedby="helpId" placeholder="" value="{{old('office',$contactcomponent->office)}}">
          </div>
        <div class="form-group">
            <label for="">Address</label>
             @if ($errors->has('address'))
      @foreach ($errors->get('address') as $error)
    <p class="text-danger">{{$errors->first('address')}}</p>
      @endforeach
    @endif
            <textarea class="form-control" name="address" id="" rows="3">{{old('address',$contactcomponent->address)}}</textarea>
          </div>


          <button type="submit">Submit</button>
    </form>
@endcan
@stop