@extends('layouts.auth')

@section('content')

<div class="form-wrap">

    <form class="auth-form" method="POST" action="{{ route('password.email') }}">

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        @csrf

        <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">

        <h1 class="h3 mb-3 font-weight-normal">{{ __('What was it again?') }}</h1>

        <p>Enter the email address associated with your account.</p>

        <div class="form-row mt-4">
            <label for="email" class="sr-only">Email address</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Recovery email address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <p>It can take a few minutes for the email to hit your inbox</p>

        <div class="form-row mt-3">

            <button class="btn btn-lg btn-primary btn-block " type="submit">
                {{ __('Send Password Reset Link') }}
            </button>
        </div>

    </form>

</div>

@endsection
