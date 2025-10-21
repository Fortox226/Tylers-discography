@extends('layouts.app')

@section('content')
        @foreach ($albums as $album)
            <div class="album">
                <h2>{{ $album->title }}</h2>
                <p>Release Date: {{ $album->year }}</p>
            
                <div class="album-content">
                    <img src="{{ $album->cover }}" alt="{{ $album->title }} cover" class="album-cover">
            
                    <div class="song-list">
                        @foreach ($album->songs as $song)
                            <div class="song-item">
                                <span class="song-number">{{ $loop->iteration }}.</span>
                                <span class="song-title">{{ $song->title }}</span>
                                @if ($song->duration)
                                    <span class="song-duration">– {{ $song->duration }}</span>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        @endforeach
@endsection