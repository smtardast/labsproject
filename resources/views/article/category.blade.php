@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Create a category</h1>
@stop

@section('content')

<table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Category</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
         
            @foreach ($categories as $item)
                <tr>
                <th>{{$item->id}}</th>
                <th>{{$item->category}}</th>
                @can('admin')
                <th>
                        <a name="" id="" class="btn btn-primary" href="{{route('category.edit', ['category'=>$item->id])}}" role="button">Edit</a>
                        <form action="{{route('category.destroy', ['category'=>$item->id])}}" method="POST">
                                @method('DELETE')
                                @csrf
                                
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </th>
                @endcan
                    
                </tr>
            @endforeach
        </tbody>
      </table>

@can('editor')
<form action="{{route('category.store')}}" method="post">
        @csrf
        <div class="form-group">
          <label for="">Create a category</label>
          <input type="text"
            class="form-control" name="category" id="" aria-describedby="helpId" placeholder="">
          
        </div>
    
        <button type="submit">Submit</button>
    </form>
@endcan

@stop
