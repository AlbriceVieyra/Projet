@extends('layout')

@section('content')

<h1>Projet "Debug moi"</h1>

<section>
    <h2>Les 5 dernières questions</h2>
    
     @include('posts.list', ['posts' => $posts])
</section>

@endsection

