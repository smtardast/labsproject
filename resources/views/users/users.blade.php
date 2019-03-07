@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>All users</h1>
@stop

@section('content')
<a href="{{route('user.create')}}">
        <button type="button" class="btn btn-dark">Create a user</button>
    </a>
<table class="table table-striped">
<thead class="thead-dark">
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">E-mail</th>
        <th scope="col">Role</th>
        <th scope="col">Actions</th>

    </tr>
</thead>
<tbody>
        @foreach ($users as $item)
        <th>{{$item->id}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->role->role}}</td>
        <td>
        <a href="{{route('profile.show', ['profile'=>$item->id])}}">
                <button type="button" class="btn btn-light">Profile</button>
            </a>
       @can('update', $item)
       <a href="{{route('user.edit', ['user'=>$item->id])}}">
            <button type="button" class="btn btn-secondary">Edit</button>
        </a>
        @endcan
        {{-- @cannot('update', $item) --}}
            
        <form action="{{route('user.destroy',['user'=>$item->id])}}" method="POST">
                @method('DELETE')
            @csrf
        
            <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        {{-- @endcan --}}
            
                
                

        </td>
        @endforeach
</tbody>
</table>
    
@stop
