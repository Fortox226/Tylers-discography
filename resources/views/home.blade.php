@extends('layouts.app')

@section('content')

<section class="subtitle">
    <h1>TYLER'S BEST CLIPS</h1>
    <div class="orange-block"></div>
    <hr>
</section>

<div class="container" class="main-img">
    <div class="row">
        <div class="albumshold ">
            @foreach ($albums->take(3) as $album)
                <div class="album bg-white">
                    <div class="album-info">
                        <h2>{{ $album->title}}
                            <br>
                            <h3>{{ $album->year}}</h3>
                        </h2>

                    </div>
                    <img src="{{ $album->cover }}" alt="">
                </div>
                        
            @endforeach
        </div>
    </div>
@endsection
