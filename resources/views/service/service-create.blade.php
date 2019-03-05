@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1>Services</h1>
@stop

@section('content')
@can('admin')
    
<i class="flaticon-013-puzzle"></i>

<form action="{{route('service.store')}}" method="post">

    

    @csrf
       <div class="form-group">
         <label for="">Title</label>
         <input type="text"
           class="form-control" name="title" id="" aria-describedby="helpId" placeholder="">
       </div>
       <div class="form-group">
         <label for="">Text</label>
         <textarea class="form-control" name="text" id="" rows="3"></textarea>
       </div>
       <div class="form-group">
            <label for="">Icon</label>
            <select class="form-control" name="icon_id" id="">
              @foreach ($icons as $item)
            <option value="{{$item->id}}">
              {{$item->code}}</option>
              @endforeach
            </select>
          </div>

       <button type="submit">Submit</button>
   </form>
@endcan
@stop