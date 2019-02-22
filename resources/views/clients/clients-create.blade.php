@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Clients</h1>
@stop

@section('content')

<form action="{{route('client.store')}}" method="post" enctype="multipart/form-data">

    @csrf
    
    <div class="form-group">
      <label for="">Name</label>
      <input type="text"
        class="form-control" name="name" id="" aria-describedby="helpId" >
    </div>

    <div class="form-group">
        <label for="">Job title</label>
        <input type="text"
          class="form-control" name="job" id="" aria-describedby="helpId" placeholder="">
      </div>

    <div class="form-group">
      <label for="">Client comment</label>
      <textarea class="form-control" name="text" id="" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label for="">Image</label>
        <input type="file"
          class="form-control" name="image" id="" aria-describedby="helpId" >
      </div>

    <button type="submit">Submit</button>

</form>
@stop