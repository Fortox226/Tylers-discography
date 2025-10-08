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
                <div class="album bg-white ">
                    <img src="{{ $album->cover }}" alt="">
                    <h2>{{ $album->title }}</h2>
                </div>
                        
            @endforeach
        </div>
    </div>
@endsection
