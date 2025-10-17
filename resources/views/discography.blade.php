@extends('layouts.app')

@section('content')
    @foreach ($albums as $album)
        <div class="album-row">
            <h2>{{ $album->title }}</h2>
            <p>Release Date: {{ $album->year }}</p> 
            <img src="{{ $album->cover }}" alt=""> 
              <ul class="song-list">
                @foreach ($album->songs as $song)
                    <li>
                        <strong>{{ $loop->iteration }}.</strong> {{ $song->title }}
                        @if ($song->featuring)
                            <em>(feat. {{ $song->featuring }})</em>
                        @endif
                        @if ($song->duration)
                            – <span>{{ $song->duration }}</span>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    @endforeach
@endsection