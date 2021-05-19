@extends('layout')

@section('content')
<section>
<h1>Projet "Debug moi"</h1>
<p>Un forum d'entraide pour les développeurs</p>
<p>Vous êtes bloqué(e) et ne savez pas comment avancer ? Posez une question à la communauté !</p>
<div><a class="btn btn-primary" href="{{ route('posts.create') }}" role="button">Poser une question</a>

<a class="btn btn-success" href="{{ route('posts.index') }}" role="button">Voir toutes les réponses</a></div>

</section>

<section>
    <h2>Les 5 dernières questions</h2>
    
     @include('posts.list', ['posts' => $posts])
</section>

@endsection

