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
          <input type="text"
            class="form-control" name="title" id="" aria-describedby="helpId" placeholder="" value="{{old('title',$contactcomponent->title)}}">
        </div>

        <div class="form-group">
          <label for="">Description</label>
          <textarea class="form-control" name="description" id="" rows="3">{{old('description',$contactcomponent->description)}}</textarea>
        </div>
        
        <div class="form-group">
            <label for="">Office</label>
            <input type="text"
              class="form-control" name="office" id="" aria-describedby="helpId" placeholder="" value="{{old('office',$contactcomponent->office)}}">
          </div>
        <div class="form-group">
            <label for="">Address</label>
            <textarea class="form-control" name="address" id="" rows="3">{{old('address',$contactcomponent->address)}}</textarea>
          </div>


          <button type="submit">Submit</button>
    </form>
@endcan
@stop