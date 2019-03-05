@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

@can('admin')
    
<form action="{{route('profile.update', ['profile'=>$profile->id])}}" method="post" enctype="multipart/form-data">

@method('PUT')
    @csrf


        <div class="form-group">
          <label for="">Job title</label>
          <input type="text"
        class="form-control" name="job" id="" aria-describedby="helpId" placeholder="" value="{{old('job', $profile->job)}}">
        </div>

        <div class="form-group">
                <label for="">Image</label>
                <input type="file"
                  class="form-control" name="image" id="" aria-describedby="helpId" placeholder="">
              </div>

        <button type="submit">Submit</button>
    </form>
@endcan

@stop