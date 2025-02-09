@extends('layout.default', [
'appHeaderHide' => true,
'appSidebarHide' => true,
'appContentHide' => true,
'appClass' => 'app-full-height app-without-header p-0'
])

@section('title', 'Login')

@section('content')
<!-- BEGIN login -->
<div class="login">
    <!-- BEGIN login-content -->
    <div class="login-content">
        <form action="{{ route('login') }}" method="POST">
            <h1 class="text-center">Sign In</h1>
            <div class="text-body text-opacity-50 text-center mb-5">
                For your protection, please verify your identity.
            </div>
            <div class="mb-4">
                <label class="form-label">Email Address</label>
                <input type="text" class="form-control form-control-lg fs-14px" value="" placeholder="username@address.com" />
            </div>
            <div class="mb-4">
                <div class="d-flex">
                    <label class="form-label">Password</label>
                    <a href="#" class="ms-auto text-body text-opacity-50">Forgot password?</a>
                </div>
                <input type="password" class="form-control form-control-lg fs-14px" value="" placeholder="Enter your password" />
            </div>
            <div class="mb-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="customCheck1" />
                    <label class="form-check-label fw-500" for="customCheck1">Remember me</label>
                </div>
            </div>
            <button type="submit" class="btn btn-theme btn-lg d-block w-100 mb-3">SIGN IN</button>
            <div class="text-center text-body text-opacity-50">
                Don't have an account yet? <a href="/page/register">Sign up</a>.
            </div>
        </form>
    </div>
    <!-- END login-content -->
</div>
<!-- END login -->
@endsection