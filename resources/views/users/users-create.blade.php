@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
@can('admin')
    
<form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">

    @csrf

        <div class="form-group">
          <label for="">Name</label>
           @if ($errors->has('name'))
      @foreach ($errors->get('name') as $error)
    <p class="text-danger">{{$errors->first('name')}}</p>
      @endforeach
    @endif
          <input type="text"
            class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
          
        </div>
        <div class="form-group">
        <label for="">Email</label>
         @if ($errors->has('email'))
      @foreach ($errors->get('email') as $error)
    <p class="text-danger">{{$errors->first('email')}}</p>
      @endforeach
    @endif
        <input type="text"
            class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
        
        </div>
        <div class="form-group">
            <label for="">Password</label>
             @if ($errors->has('password'))
      @foreach ($errors->get('password') as $error)
    <p class="text-danger">{{$errors->first('password')}}</p>
      @endforeach
    @endif
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
@endcan

@stop