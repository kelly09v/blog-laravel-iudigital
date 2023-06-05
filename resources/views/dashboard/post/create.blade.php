@extends('layouts.app')

@section('content')

  <h1>Crear publicaciones </h1> 
  @include('dashboard.fragment._errors.form')
  <form action="{{route('posts.store')}}" method="posts">
   @include('dashboard.posts._form')
</form>

@endsection
