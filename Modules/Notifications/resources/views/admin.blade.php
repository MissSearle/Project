@extends('theme::layout.admin')

@section('title', 'Send Notifications')

@section('content')
<h1 class="page-header">
    Send Notifications
</h1>
<hr class="mb-4 opacity-3">

@if (session()->has('message'))
<div class="alert alert-{{ session('type', 'info') }}">
    {{ session('message') }}
</div>
@endif

<div class="row g-2">
    <div class="col-md-3 col-sm-12 col-lg-4">
        <div class="card">
            <div class="card-header">
                Send Notification to specific users
            </div>
            <div class="card-body">
                <form action="{{ route('notifications.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" class="form-control" required></textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label for="userSearchInput">Select Users</label>
                        <ul id="jquery-tagit" class="tagit form-control"></ul>
                    </div>

                    <button type="submit" class="btn btn-primary">Send</button>
                </form>


            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-12 col-lg-4">
        <div class="card">
            <div class="card-header">
                Send Notification to all users
            </div>
            <div class="card-body">
                <form action="{{ route('notifications.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="send_to" value="all">
                    <div class="form-group mb-3">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" class="form-control" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-12 col-lg-4">
        <div class="card">
            <div class="card-header">
                Send Notification to a specific group of users
            </div>
            <div class="card-body">
                <form action="{{ route('notifications.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" class="form-control" required></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="role_select">Select Users by Role</label>
                        <select id="role_select" name="role" class="form-select" required>
                            <option value="" disabled selected>Please select..</option>
                            @foreach($roles as $role)
                            <option value="{{ $role->role }}">{{ ucfirst($role->role) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

