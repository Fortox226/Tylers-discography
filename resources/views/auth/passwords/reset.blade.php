@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 w-full max-w-96">
            <div class="card w-full max-w-96">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token ?? '' }}">
                        <input type="hidden" name="email" value="{{ $email ?? '' }}">

                        <div>
                            <label for="password" class="col-md-4 col-form-label text-md-start">Nowe hasło</label>
                            <input id="password" class="form-control" name="password" type="password" required>
                        </div>

                        <div>
                            <label for="password_confirmation" class="col-md-4 col-form-label text-md-start">Powtórz hasło</label>
                            <input id="password_confirmation" class="form-control" name="password_confirmation" type="password" required>
                        </div>

                        <div class="row mt-2">
                       
                                <button type="submit" class="btn btn-primary">
                                    Zresetuj hasło
                                </button>
                       
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
