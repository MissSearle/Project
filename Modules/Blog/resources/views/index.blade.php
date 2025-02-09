@extends('theme::layout.user', [
'appClass' => 'app-boxed-layout app-footer-fixed',
'appFooter' => true
])
@section('title', 'Blog')

@section('content')
<ul class="breadcrumb">
    <li class="breadcrumb-item active">Blog</li>
</ul>

<div class="card">
    <div class="card-header with-btn">
        WELCOME
        <div class="card-header-btn">
            <a href="javascript:void(0);" data-toggle="card-collapse" class="btn">
                <iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon>
            </a>
            <a href="javascript:void(0);" data-toggle="card-expand" class="btn">
                <iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon>
            </a>
            <a href="javascript:void(0);" data-toggle="card-remove" class="btn">
                <iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon>
            </a>
        </div>
    </div>
    <div class="card-body">
        <p>
            This is the blog
        </p>
    </div>
</div>
@endsection
