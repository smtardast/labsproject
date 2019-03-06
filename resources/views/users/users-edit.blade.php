@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<form action="{{route('user.update',['user'=>$user->id])}}" method="post">
    @method('PUT')
        @csrf
    
            <div class="form-group">
              <label for="">Name</label>
               @if ($errors->has('name'))
      @foreach ($errors->get('name') as $error)
    <p class="text-danger">{{$errors->first('name')}}</p>
      @endforeach
    @endif
              <input type="text"
                class="form-control" name="name" id="" aria-describedby="helpId" placeholder="" value="{{old('name',$user->name)}}">
              
            </div>
            <div class="form-group">
            <label for="">Email</label>
             @if ($errors->has('email'))
      @foreach ($errors->get('email') as $error)
    <p class="text-danger">{{$errors->first('email')}}</p>
      @endforeach
    @endif
            <input type="text"
                class="form-control" name="email" id="" aria-describedby="helpId" placeholder="" value="{{old('email',$user->email)}}">
            
            </div>
            <div class="form-group">
                <label for="">Password</label>
                 @if ($errors->has('password'))
      @foreach ($errors->get('password') as $error)
    <p class="text-danger">{{$errors->first('password')}}</p>
      @endforeach
    @endif
                <input type="text"
                    class="form-control" name="password" id="" aria-describedby="helpId" placeholder="" value="{{old('password',$user->password)}}">
                
                    
                </div>

                @can('update', $item)
                
                            <div class="form-group">
                                    <label for="">Role</label>
                                    <select name="role_id" id="">
                                        @foreach ($roles as $item)
                                    <option value="{{$item->id}}">{{$item->role}}</option>
                                        @endforeach
                                    </select>
                                    
                            </div>
                    
                
                @endcan
    
            <button type="submit">Submit</button>
        </form>
@stop