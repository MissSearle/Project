@extends('theme::layout.default')

@section('title', 'Confirm Password')

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

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf
            <!-- Include CSRF token -->
            <h1 class="text-center">Confirm Password</h1>
            <p class="text-body text-opacity-50 text-center mb-4">This is a secure area of the application. Please confirm your password before continuing.</p>


            <!-- Password -->
            <div class="mb-4">
                <label class="form-label">Password <span class="text-danger">*</span></label>
                <input id="password" class="form-control form-control-lg fs-14px" type="password" name="password" required autocomplete="current-password">
            </div>

            <!-- Submit Button -->
            <div class="mb-3">
                <button type="submit" class="btn btn-theme btn-lg d-block w-100 mb-3">{{ __('Confirm') }}</button>
            </div>
        </form>
    </div>
    <!-- END register-content -->
</div>
<!-- END register -->
@endsection

