@extends('layouts.app')

@section('content')
    <div class="form-login">
        <div class="container d-flex justify-content-center">
            <div class="card fc-white shadow-lg">
                <div class="header d-flex justify-content-center">
                    <img src="./images/twitter-logo.svg" alt="" width="40px">
                </div>
                <div class="login">
                    <h3>Sign in to Twitter</h3>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-gorup mb-4">
                            <input type="email" name="email" id="email" placeholder="Phone, email, or username"
                                class="form-control @error('email') is-invalid @enderror">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message = 'coba lagi ya. kalo gabisa, berarti kamu bukan april' }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-gorup">
                            <input type="password" name="password" id="password" placeholder="Password"
                                class="form-control @error('password') is-invalid @enderror">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-login mt-5">{{ __('Login') }}</button>
                        <button type="submit" class="btn btn-forgot mt-3">Forgot password?</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
