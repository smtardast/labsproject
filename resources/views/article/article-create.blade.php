@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Create an article</h1>
@stop

@section('content')
    @can('editor')
      
    <form action="{{route('article.store')}}" method="post" enctype="multipart/form-data">
      
      @csrf
      <div class="form-group">
        <label for="">Title</label>
        <input type="text"
        class="form-control" name="title" id="" aria-describedby="helpId" placeholder="">
      </div>
      
      <div class="form-group">
        <label for="">Image</label>
        <input type="file"
        class="form-control" name="image" id="" aria-describedby="helpId">
      </div>
      
      <div class="form-group">
        <label for="">Text</label>
        <textarea class="form-control" name="text" id="summary-ckeditor" rows="3">
          
        </textarea>
      </div>
      
      <div class="form-group">
        <label for="">Author comment</label>
        <textarea class="form-control" name="authortext" id="" rows="3"></textarea>
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
      
      
      <button type="submit">Submit</button>
      
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



</form>
@endcan

<button href="{{route('category.index')}}">Create a category</button>



@stop