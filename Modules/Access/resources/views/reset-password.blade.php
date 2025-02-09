@extends('theme::layout.default')

@section('title', 'Reset Password')

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
        
        <form method="POST" action="{{ route('password.store') }}">
            @csrf
            <!-- Include CSRF token -->
            <h1 class="text-center">Reset Password</h1>
            <p class="text-body text-opacity-50 text-center mb-4"></p>

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">


            <!-- Email -->
            <div class="mb-4">
                <label class="form-label">Email Address <span class="text-danger">*</span></label>
                <input id="email" class="form-control form-control-lg fs-14px" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username">
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label class="form-label">Password <span class="text-danger">*</span></label>
                <input id="password" class="form-control form-control-lg fs-14px" type="password" name="password" required autocomplete="new-password">

            </div>

            <!-- Confirm Password -->
            <div class="mb-4">
                <label class="form-label">Confirm Password <span class="text-danger">*</span></label>
                <input id="password_confirmation" class="form-control form-control-lg fs-14px" type="password" name="password_confirmation" required autocomplete="new-password">
            </div>

            <!-- Submit Button -->
            <div class="mb-3">
                <button type="submit" class="btn btn-theme btn-lg d-block w-100 mb-3">{{ __('Reset Password') }}</button>
            </div>
        </form>
    </div>
    <!-- END register-content -->
</div>
<!-- END register -->
@endsection
