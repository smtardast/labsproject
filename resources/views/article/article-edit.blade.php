@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<form action="{{route('article.update', ['article'=>$article->id])}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group">
      <label for="">Title</label>
      @if ($errors->has('title'))
      @foreach ($errors->get('title') as $error)
    <p class="text-danger">{{$errors->first('title')}}</p>
      @endforeach
    @endif
      <input type="text"
    class="form-control" name="title" id="" aria-describedby="helpId" placeholder="" value="{{old('
    title', $article->title)}}">
    </div>

    <div class="form-group">
    <label for="">Image</label>
    @if ($errors->has('image'))
    @foreach ($errors->get('image') as $error)
  <p class="text-danger">{{$errors->first('image')}}</p>
    @endforeach
  @endif
    <input type="file"
              class="form-control" name="image" id="" aria-describedby="helpId">
    </div>
    
    <div class="form-group">
    <label for="">Text</label>
    @if ($errors->has('text'))
    @foreach ($errors->get('text') as $error)
  <p class="text-danger">{{$errors->first('text')}}</p>
    @endforeach
  @endif
    <textarea class="form-control" name="text" id="summary-ckeditor" rows="3">
        {{ old('text', $article->text)}}">    
    </textarea>
    </div>

    <div class="form-group">
      <label for="">Author comment</label>
      @if ($errors->has('authortext'))
      @foreach ($errors->get('authortext') as $error)
    <p class="text-danger">{{$errors->first('authortext')}}</p>
      @endforeach
    @endif
      <textarea class="form-control" name="authortext" id="" rows="3">
          {{ old('authortext', $article->authortext)}}">
      </textarea>
    </div>

    <div class="form-group">
      <label for="">Category</label>
      <select class="form-control" name="category_id" id="">
        @foreach ($categories as $item)
      <option value="{{$item->id}}">{{$item->category}}</option>
        @endforeach
      </select>
    </div>
    
    <div class="form-check form-check-inline">
        @foreach ($tags as $item)
        <input type="checkbox" class="form-check-input" name="tag_id[]" id="" value="{{$item->id}}" >
    <label class="form-check-label" for="inlineCheckbox1">{{$item->tag}}</label>
     
        @endforeach  
      
     
      </div>
    {{-- <div class="form-group">
      <label for="">Author</label>
      <select class="form-control" name="user_id" id="">
        @foreach ($users as $item)
      <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
      </select>
    </div> --}}

  
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
      CKEDITOR.replace( 'summary-ckeditor' );
    </script>

    <button type="submit">Submit</button>


</form>

<button href="{{route('category.index')}}">Create a category</button>


@stop