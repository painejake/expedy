@extends('layouts.auth')

@section('content')

<div class="form-wrap">

    <form class="auth-form" method="POST" action="{{ route('login') }}">

        @csrf

        <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">

        <h1 class="h3 mb-3 font-weight-normal">{{ __('Please sign in') }}</h1>

        <div class="form-row">
            <label for="email" class="sr-only">Email address</label>
            <input id="email" type="email" placeholder="Email address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-row">
            <label for="password" class="sr-only">Password</label>
            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <div class="checkbox mt-2">
            <label>
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                {{ __('Remember me') }}
            </label>
        </div>

        <button class="btn btn-lg btn-primary btn-block mt-2" type="submit">
            {{ __('Sign in') }}
        </button>

        @if (Route::has('password.request'))
            <a class="btn btn-link mt-2" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif

    </form>

</div>
 
@endsection
