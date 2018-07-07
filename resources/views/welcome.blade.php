@extends('layouts.app')

@section('content')
    <div class="title m-b-md">
        Larax, by <a href="https://platzi.com">Platzi</a>
    </div>

    @if (isset($teacher))
        <p>Professor: {{ $teacher }}</p>
    @else
        <p>*** Profesor a definir ***</p>
    @endisset

    <div class="links">
        @foreach ($links as $link => $text)
        <a href="{{ $link }}">{{ $text }}</a>
        @endforeach
    </div>
@endsection

