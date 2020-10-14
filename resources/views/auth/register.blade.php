@section('title', 'Register')
@extends('auth.layouts.app')
@section('from')

    <div class="ibox-content">
        <h2 class="text-center font-bold p-4">Register</h2>
        <form class="m-t" role="form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <input id="name" type="name" class="form-control @error('name') is-invalid @enderror"
                       placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="email"
                       autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                       placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email"
                       autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <input id="password" type="password" placeholder="Password"
                       class="form-control @error('password') is-invalid @enderror" name="password" required
                       autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $password }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <input id="password_confirm" type="password" placeholder="Confirm Password"
                       class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required
                       autocomplete="current-password">

                @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $password }}</strong>
                </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b font-bold">Register</button>
        </form>
    </div>
@endsection
