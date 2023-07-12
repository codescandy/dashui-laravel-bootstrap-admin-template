@extends('layouts.blank')
@section('title')
    Create an account
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
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <!-- Username -->
                            <div class="mb-3">
                                <label for="username" class="form-label">{{ __('User Name') }}</label>
                                <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

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
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label for="confirm-password" class="form-label">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <!-- Checkbox -->
                            <div class="mb-3">
                                <div class="form-check custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="agreeCheck" required>
                                    <label class="form-check-label" for="agreeCheck">
                                        <span class="fs-5">I agree to the <a href="terms-condition-page.html">Terms of
                                                Service </a>and
                                            <a href="terms-condition-page.html">Privacy Policy.</a></span></label>
                                </div>
                            </div>
                            <div>
                                <!-- Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create Free Account') }}
                                    </button>
                                </div>
                                <div class="d-md-flex justify-content-between mt-4">
                                    <div class="mb-2 mb-md-0">
                                        <a href="{{ route('login') }}" class="fs-5">{{ __('Already member? Login') }}</a>
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
