@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Clients</h1>
@stop

@section('content')
{{-- @can('admin') --}}
    <div class="row">
        <a name="" id="" class="btn btn-primary" href="{{route('client.create')}}" role="button">Make a client profile</a>
    </div>
    @foreach ($clients as $client)
        
        <img src="{{Storage::disk('client')->url($client->image)}}" alt="">
        <h3>{{$client->name}}</h3>
        <h4>{{$client->job}}</h4>
<a name="" id="" class="btn btn-primary" href="{{route('maketestimonial', ['client'=>$client->id])}}" role="button">Create a testimonial</a>
{{-- @foreach ($client->testimonials as $testimonial)
<div class="card" style="width: 18rem;">
       
        <div class="card-body">
          <h5 class="card-title">Testimonial</h5>
          <p class="card-text">{{$testimonial->text}}</p>
          <a name="" id="" class="btn btn-primary" href="#" role="button">Edit testimonial</a>
          <form action="{{route('testimonial.destroy', ['testimonial'=>$testimonial->id])}}" method="POST">
                @method('DELETE')
                @csrf
                
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
      </div>
@endforeach --}}

        <a name="" id="" class="btn btn-primary" href="{{route('client.edit', ['client'=>$client->id])}}" role="button">Edit</a>
        <form action="{{route('client.destroy', ['client'=>$client->id])}}" method="POST">
            @method('DELETE')
            @csrf
            
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        
    @endforeach
    
{{-- @endcan --}}

@stop