@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Create a tag</h1>
@stop

@section('content')

<table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Tag</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
         
            @foreach ($tags as $item)
                <tr>
                <th>{{$item->id}}</th>
                <th>{{$item->tag}}</th>
                
                @can('admin')
                    
                <th>
                <a name="" id="" class="btn btn-primary" href="{{route('tag.edit', ['tag'=>$item->id])}}" role="button">Edit</a>
                <form action="{{route('tag.destroy', ['tag'=>$item->id])}}" method="POST">
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

<form action="{{route('tag.store')}}" method="post">
    @csrf
    <div class="form-group">
      <label for="">Create a tag</label>
      @if ($errors->has('tag'))
      @foreach ($errors->get('tag') as $error)
    <p class="text-danger">{{$errors->first('tag')}}</p>
      @endforeach
    @endif
      <input type="text"
        class="form-control" name="tag" id="" aria-describedby="helpId" placeholder="">
      
    </div>

    <button type="submit">Submit</button>
</form>

@stop
