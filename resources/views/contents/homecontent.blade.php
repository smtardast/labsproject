@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Content of homepage</h1>
@stop

@section('content')
@can('admin')
    
<form action="{{route('homecontent.update', ['homecontent'=>$homecontent->id])}}" method="post">

        @method('PUT')
        @csrf

        <div class="form-group">
          <label for="">Subtitle</label>
          <input type="text"
            class="form-control" name="subtitle" id="" aria-describedby="helpId" placeholder="" value="{{old('subtitle',$homecontent->subtitle)}}">
        </div>

        <div class="form-group">
            <label for="">Title of description</label>
            <input type="text"
              class="form-control" name="descriptiontitle" id="" aria-describedby="helpId" placeholder="" value="{{old('descriptiontitle',$homecontent->descriptiontitle)}}">
          </div>

        <div class="form-group">
          <label for="">Description column 1</label>
          <textarea class="form-control" name="description" id="" rows="3">{{old('description',$homecontent->description)}}</textarea>
        </div>

        <div class="form-group">
          <label for="">Description column 2</label>
          <textarea class="form-control" name="description2" id="" rows="3">{{old('description2',$homecontent->description2)}}</textarea>
        </div>

        <div class="form-group">
            <label for="">Title of the client testimonials</label>
            <input type="text"
              class="form-control" name="clienttitle" id="" aria-describedby="helpId" placeholder="" value="{{old('clienttitle',$homecontent->clienttitle)}}">
          </div>
          <div class="form-group">
            <label for="">Title of the service section</label>
            <input type="text"
              class="form-control" name="servicetitle" id="" aria-describedby="helpId" placeholder="" value="{{old('servicetitle',$homecontent->servicetitle)}}">
          </div>
          
          <div class="form-group">
            <label for="">Title of the team section</label>
            <input type="text"
              class="form-control" name="teamtitle" id="" aria-describedby="helpId" placeholder="" value="{{old('teamtitle',$homecontent->teamtitle)}}">
          </div>
          <div class="form-group">
            <label for="">Title above the browse button</label>
            <input type="text"
              class="form-control" name="browsetitle" id="" aria-describedby="helpId" placeholder="" value="{{old('browsetitle',$homecontent->browsetitle)}}">
          </div>
          <div class="form-group">
            <label for="">Subtitle above the browse button</label>
            <textarea class="form-control" name="browsesubtitle" id="" rows="3">{{old('browsesubtitle',$homecontent->browsesubtitle)}}</textarea>
          </div>

          <button type="submit">Submit</button>
    </form>
@endcan
@stop