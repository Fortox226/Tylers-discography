@extends('layouts.admin')

@section('content')
<header>
<div style="background-color: #3C3D37; border-radius: 12,5px;">
    <h1>Witaj {{ Auth::user()->name }}</h1>
</div>
</header>
<dialog>
  <button autofocus id="closeModal">Close</button>
  <p class="user-name"></p>
  <p class="user-email"></p>
  <pc class="user-role"></p>
</dialog>
<div class="sekcje">
    <section class="users-admin">
        <h2>Lista użytkowników</h2>
        @foreach ($users as $user)
            <div class="user-row" data-id="{{ $user->id }}" data-login="{{$user->name}}" data-email="{{ $user->email }}" data-role="{{ $user->role }}">
                <span> - {{ $user->name }}</span>
                <div class="buttons">
                    <button class="info-btn" id="openModal">Info</button>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-btn">Usuń</button>
                    </form>
                </div>
            </div>
        @endforeach
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