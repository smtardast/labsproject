@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">

    @csrf

        <div class="form-group">
          <label for="">Name</label>
          <input type="text"
            class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
          
        </div>
        <div class="form-group">
        <label for="">Email</label>
        <input type="text"
            class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
        
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="text"
                class="form-control" name="password" id="" aria-describedby="helpId" placeholder="">
            
                
            </div>
        <div class="form-group">
                <label for="">Role</label>
                <select name="role_id" id="">
                    @foreach ($roles as $item)
                <option value="{{$item->id}}">{{$item->role}}</option>
                    @endforeach
                </select>
                
        </div>

        <div class="form-group">
          <label for="">Job title</label>
          <input type="text"
            class="form-control" name="job" id="" aria-describedby="helpId" placeholder="">
        </div>

        <div class="form-group">
                <label for="">Image</label>
                <input type="file"
                  class="form-control" name="image" id="" aria-describedby="helpId" placeholder="">
              </div>

        <button type="submit">Submit</button>
    </form>
@stop