@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <h1>Reset hasła</h1>

    <p>Token: {{ $token ?? 'brak tokena' }}</p>
    <p>Email: {{ $email ?? 'brak email' }}</p>

    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token ?? '' }}">
        <input type="hidden" name="email" value="{{ $email ?? '' }}">

        <div>
            <label for="password">Nowe hasło</label>
            <input id="password" name="password" type="password" required>
        </div>

        <div>
            <label for="password_confirmation">Powtórz hasło</label>
            <input id="password_confirmation" name="password_confirmation" type="password" required>
        </div>

        <button type="submit">Zresetuj hasło</button>
    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
