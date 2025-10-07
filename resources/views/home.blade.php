@extends('layouts.app')

@section('content')

<div class="container" class="main-img">

    <div class="row justify-content-center flex-wrap">
        <div class="col-md-4 ">

                

                <div class="albumshold ">
                    @foreach ($albums as $album)
                        <div class="album bg-white ">
                            <h2>{{ $album->title }}</h2>
                            <p>Release Date: {{ $album->release_date }}</p>
                            <p>Genre: {{ $album->genre }}</p>
                            <p>Label: {{ $album->label }}</p>
                            <p>Producer: {{ $album->producer }}</p>
                        </div>
                        
                    @endforeach
                </div>

    </div>
</div>
@endsection
