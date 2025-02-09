@extends('theme::layout.default')

@section('title', 'Register')

@section('content')
<!-- BEGIN register -->
<div class="register">
    <!-- BEGIN register-content -->
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

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Include CSRF token -->
            <h1 class="text-center">Sign Up</h1>
            <p class="text-body text-opacity-50 text-center mb-4"></p>

            <!-- Name -->
            <div class="mb-4">
                <label class="form-label">Name <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control form-control-lg fs-14px" placeholder="e.g John Smith" value="{{ old('name') }}" required>
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label class="form-label">Email Address <span class="text-danger">*</span></label>
                <input type="email" name="email" class="form-control form-control-lg fs-14px" placeholder="username@address.com" value="{{ old('email') }}" required>
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label class="form-label">Password <span class="text-danger">*</span></label>
                <input type="password" name="password" class="form-control form-control-lg fs-14px" placeholder="Enter your password" required>
            </div>

            <!-- Confirm Password -->
            <div class="mb-4">
                <label class="form-label">Confirm Password <span class="text-danger">*</span></label>
                <input type="password" name="password_confirmation" class="form-control form-control-lg fs-14px" placeholder="Confirm your password" required>
            </div>

            <!-- Agree to Terms 
            <div class="mb-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="terms" id="customCheck1" required>
                    <label class="form-check-label" for="customCheck1">
                        I have read and agree to the <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>.
                    </label>
                </div>
            </div>
            -->

            <!-- Submit Button -->
            <div class="mb-3">
                <button type="submit" class="btn btn-theme btn-lg d-block w-100 mb-3">SIGN UP</button>
            </div>

            <div class="text-body text-opacity-50 text-center">
                Already have an account? <a href="{{ route('login') }}">Sign In</a>
            </div>
        </form>
    </div>
    <!-- END register-content -->
</div>
<!-- END register -->
@endsection
