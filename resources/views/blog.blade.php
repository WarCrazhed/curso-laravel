@extends('template')
@section('content')
    @foreach ($posts as $post)
        <h1>Listado</h1>

        @foreach ($posts as $post)
            <p>
                {{ $post['id'] }}
                <a href="{{ route('post', $post['slug']) }}">
                    {{ $post['title'] }}
                </a>
            </p>
        @endforeach
    @endforeach
@endsection
