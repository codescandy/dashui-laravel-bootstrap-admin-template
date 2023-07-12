@extends('layouts.blank')
@section('title')
    Login
@endsection
@section('content')
    <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center g-0 min-vh-100">
            <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
                <!-- Card -->
                <div class="card smooth-shadow-md">
                    <!-- Card body -->
                    <div class="card-body p-6">
                        <div class="mb-4">
                            <img src="{{ Vite::asset('resources/images/brand/logo/logo-primary.svg') }}" alt="" class="mb-2"/>
                            <p class="mb-6">Please enter your user information.</p>
                        </div>
                        <!-- Form -->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <!-- Username -->
                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Username or email') }}</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email', 'admin@dashui.com') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password" value="admin123456">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Remember Me Checkbox -->
                            <div class="d-lg-flex justify-content-between align-items-center mb-4">
                                <div class="form-check custom-checkbox">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <div>
                                <!-- Sign in Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Sign in') }}
                                    </button>
                                </div>
                                <div class="d-md-flex justify-content-between mt-4">
                                    <div class="mb-2 mb-md-0">
                                        <a href="{{ route('register') }}" class="fs-5">{{ __('Create An Account') }}</a>
                                    </div>
                                    <div>
                                        @if (Route::has('password.request'))
                                            <a class="text-inherit" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
