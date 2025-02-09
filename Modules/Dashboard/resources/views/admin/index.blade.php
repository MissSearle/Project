@extends('theme::layout.admin')
@section('title', 'Dashboard')

@section('content')
<h1 class="page-header">
    Dashboard
</h1>

<div class="card">
    <div class="card-header">
        WELCOME
    </div>
    <div class="card-body">
        <p>
            This is the admin dashboard! Do admin stuff
        </p>
    </div>
</div>
@endsection

@section('scripts')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection

