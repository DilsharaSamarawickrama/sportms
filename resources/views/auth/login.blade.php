@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/form.css') }}">
<style>
    #container{
        width: 30rem;
        margin: 0 auto;
        z-index: -1;
        align-content: center;
    }
</style>

@section('content')
<div id="container">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <center><legend>Login</legend></center>
                <div class="row">
                    <div class="col-md-12">
                        <label for="uid">{{ __('User ID') }}</label>
                        <input id="uid" type="text" class="form-control @error('uid') is-invalid @enderror" name="uid" value="{{ old('uid') }}" required autocomplete="uid" autofocus>

                        @error('uid')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="">
                    <div class="col-md-12">
                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                {{ __('Remember Me') }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <button type="submit">
                            {{ __('Login') }}
                        </button>
                        <button type="reset" style="float: left;">
                            {{ __('Reset') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
