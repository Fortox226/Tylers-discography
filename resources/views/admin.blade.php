@extends('layouts.admin')

@section('content')
<header>
<div style="background-color: #3C3D37; border-radius: 12,5px;">
    <h1>Witaj {{ Auth::user()->name }}</h1>
</div>
</header>
<div class="sekcje">
    <section class="users-admin">
        <h2>Lista użytkowników</h2>
        <ul>
        @foreach($users as $user)
            <li>{{ $user->name }}</li>    
        @endforeach
        </ul>
    </section>
    <section class="albums-admin">
        <h2>albumy</h2>
        <ul>
        @foreach($albums as $album)
            <li>{{ $album->title }}</li>
        @endforeach
        </ul>
    </section>
</div>

@endsection