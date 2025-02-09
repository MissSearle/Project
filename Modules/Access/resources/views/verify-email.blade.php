@extends('theme::layout.default')

@section('title', 'Forgot Password')

@section('content')
<div class="register">
    <div class="register-content">
        <!-- Display Validation Errors -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action="{{ route('verification.send') }}">

            @csrf
            <!-- Include CSRF token -->
            <h1 class="text-center">Enter Your Email</h1>
            <p class="text-body text-opacity-50 text-center mb-4">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>

            <!-- Email -->
            <div class="mb-4">
                <label class="form-label">Email Address <span class="text-danger">*</span></label>
                <input class="form-control form-control-lg fs-14px" type="email" name="email" :value="old('email')" required autofocus>
            </div>

            <!-- Submit Button -->
            <div class="mb-3">
                <button type="submit" class="btn btn-theme btn-lg d-block w-100 mb-3">{{ __('Email Password Reset Link') }}</button>
            </div>

            <div class="text-body text-opacity-50 text-center">
                Know your password? <a href="{{ route('login') }}">Sign In</a>
            </div>
        </form>
    </div>
</div>
@endsection

