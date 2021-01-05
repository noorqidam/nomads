@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row page-login d-flex align-items-center">
            <div class="section-left col-12 col-md-6" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="150">
                    <h1 class="mb-4">We explore the new <br />life much better</h1>
                <img src="frontend/images/login-images.png" alt="" class="w-75 d-none d-sm-flex">
            </div>
            <div class="section-right col-12 col-md-4" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="150">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{url('frontend/images/logo_nomads.png')}}" alt="" class="w-50 mb-4">
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="col-form-label text-md-right">{{ __('Email Address') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-login btn-block mb-3">
                                {{ __('Sign In') }}
                            </button>
                            <div class="text-center">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
