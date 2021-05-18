@extends('layout')

@section('title', 'blog')

@section('content')

    <h1>Toutes des questions</h1>
    
    @include('posts.list', ['posts' => $posts])
    <nav>
        {{ $posts->links() }}
    </nav>

    
@endsection