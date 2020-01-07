@extends('layouts.auth')

@section('content')

<div class="form-wrap">

    <form class="auth-form" method="POST" action="{{ route('register') }}">

        @csrf

        <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">

        <h1 class="h3 mb-3 font-weight-normal">{{ __('Register a new account') }}</h1>

        <div class="form-row">
            <label for="name" class="sr-only">{{ __('Full name') }}</label>
            <input id="name" type="text" placeholder="{{ __('Full name') }}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-row">
            <label for="email" class="sr-only">{{ __('Email address') }}</label>
            <input id="email" type="email" placeholder="{{ __('Email address') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-row">
            <label for="password" class="sr-only">{{ __('Password') }}</label>
            <input id="password" type="password" placeholder="{{ __('Password') }}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-row">
            <label for="password-confirm" class="sr-only">{{ __('Confirm password') }}</label>
            <input id="password-confirm" type="password" placeholder="{{ __('Confirm password') }}" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>

        <button class="btn btn-lg btn-primary btn-block mt-4" type="submit">
            {{ __('Register') }}
        </button>

    </form>

</div>

@endsection
