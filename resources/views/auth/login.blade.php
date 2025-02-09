@extends('theme::layout.default', [
'appHeaderHide' => true,
'appSidebarHide' => true,
'appContentHide' => true,
'appClass' => 'app-full-height app-without-header p-0'
])

@section('title', 'Login')

@section('content')
<div class="login">
    <div class="login-content">
        <!-- Display Errors -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Display Authentication Error -->
        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <h1 class="text-center">Sign In</h1>
            <div class="text-body text-opacity-50 text-center mb-5">
                For your protection, please verify your identity.
            </div>
            <div class="mb-4">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control form-control-lg fs-14px" placeholder="username@address.com" required>
            </div>
            <div class="mb-4">
                <div class="d-flex">
                    <label class="form-label">Password</label>
                    <a href="{{ route('password.request') }}" class="ms-auto text-body text-opacity-50">Forgot password?</a>
                </div>
                <input type="password" name="password" class="form-control form-control-lg fs-14px" placeholder="Enter your password" required>
            </div>
            <div class="mb-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="customCheck1">
                    <label class="form-check-label fw-500" for="customCheck1">Remember me</label>
                </div>
            </div>
            <button type="submit" class="btn btn-theme btn-lg d-block w-100 mb-3">SIGN IN</button>
            <div class="text-center text-body text-opacity-50">
                Don't have an account yet? <a href="{{ route('register') }}">Sign up</a>.
            </div>
        </form>
    </div>
</div>
@endsection