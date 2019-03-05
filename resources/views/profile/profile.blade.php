@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Profile</h1>
@stop

@section('content')
<h2>Hi, {{$profile->user->name}}!</h2>

<img src="{{Storage::disk('profile')->url($profile->image)}}" alt="">

<p>Job: {{$profile->job}}</p>

@can('update', $profile->user)
    
<a href="{{route('profile.edit', ['profile'=>$profile->id])}}">
        <button type="button" class="btn btn-secondary">Edit</button>
</a>
@endcan

@stop