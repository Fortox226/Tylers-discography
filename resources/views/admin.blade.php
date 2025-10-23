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
            @foreach ($users as $user)
                <div class="user-row">
                    <span>{{ $user->name }}</span>

                    <div class="buttons">
                        <button class="info-btn" onclick="showUserInfo({{ $user->id }})">Info</button>

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
@foreach ($users as $user)
    <div class="user-row">
        <span>{{ $user->name }}</span>

        <div class="buttons">
            <button class="info-btn" onclick="showUserInfo({{ $user->id }})">Info</button>

            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-btn">Usuń</button>
            </form>
        </div>
    </div>
@endforeach
<script>
function showUserInfo(userId) {
    fetch(`/admin/users/${userId}`)
        .then(response => response.json())
        .then(data => {
            let content = `
                <p><strong>ID:</strong> ${data.id}</p>
                <p><strong>Nazwa:</strong> ${data.name}</p>
                <p><strong>Email:</strong> ${data.email}</p>
                <p><strong>Utworzono:</strong> ${new Date(data.created_at).toLocaleString()}</p>
            `;
            document.getElementById('userInfoContent').innerHTML = content;
            document.getElementById('userModal').style.display = 'flex';
        });
}

function closeModal() {
    document.getElementById('userModal').style.display = 'none';
}
</script>


@endsection