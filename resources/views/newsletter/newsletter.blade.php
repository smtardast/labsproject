@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Newsletter</h1>
@stop

@section('content')
<form action="{{route('newsletter.store')}}" method="post">
    @csrf
    <div class="form-group">
      <label for="">Add someone to the newsletter</label>
      <input type="text"
        class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
      
    </div>
    <button type="submit">Create</button>
</form>
<table class="table table-striped">
    <thead>E-mail</thead>
    <tbody>
    @foreach ($newsletters as $item)
        <tr>
        <th scope="row">{{$item->email}}</th>
        
        <th><form action="{{route('newsletter.destroy', ['newsletter'=>$item->id])}}" method="POST">
                @method('DELETE')
                @csrf
                
                <button type="submit" class="btn btn-danger">Delete</button>
            </form></th>
        </tr>
    @endforeach
</tbody>
</table>
@stop