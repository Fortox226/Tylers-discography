@extends('layouts.app')

@section('content')
    @foreach ($albums as $album)
        <div class="album-row">
            <h2>{{ $album->title }}</h2>
            <p>Release Date: {{ $album->year }}</p> 
            <img src="{{ $album->cover }}" alt="">
            <ul>
                @foreach ($album->songs as $song)
                    <li>{{ $song->title }} ({{ $song->duration }} min)</li>
                @endforeach
            </ul>           
        </div>
    @endforeach
@endsection