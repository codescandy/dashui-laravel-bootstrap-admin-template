@extends('layouts.blank')
@section('title')
    Reset Password
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
                            <img src="{{ Vite::asset('resources/images/brand/logo/logo-primary.svg') }}" alt="" />
                            <p class="mb-6">Don't worry, we'll send you an email to reset your password.
                            </p>
                        </div>
                        <!-- Form -->
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email') }}</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Button -->
                            <div class="mb-3 d-grid">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                            <span>Don't have an account? <a href="{{ route('login') }}" class="fs-5">{{ __('sign in') }}</a></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
