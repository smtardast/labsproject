@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Reply</h1>
@stop

@section('content')

    <div class="jumbotron">
    <h1 class="display-4">{{$contact->title}}</h1>

            <p class="lead">{{$contact->text}}</p>
            <hr class="my-4">
            <h4>{{$contact->name}}</h4>
            <p>{{$contact->email}}</p>
            <hr class="my-4">
           
          </div>

<form action="{{route('contact.update', ['contact'=>$contact->id])}}" method="post">
        @method('PUT')
        @csrf

        <div class="form-group">
          <label for="">Reply</label>
        <textarea class="form-control" name="reply" id="" rows="3">{{old('reply', $contact->reply)}}</textarea>
        </div>

        <button class="btn btn-primary btn-lg" type="submit">Submit</button>
    </form>
@stop