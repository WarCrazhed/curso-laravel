@extends('template')
@section('content')
    <h1>Listado</h1>

    @foreach ($posts as $post)
        <p>
            {{ $post->id }}
            <a href="{{ route('post', $post->slug) }}">
                {{ $post->title }}
            </a>
            <br/>
            <span>{{ $post->user->name }}</span>
        </p>
    @endforeach

    {{ $posts->links() }}
@endsection
