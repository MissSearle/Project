@extends('theme::layout.admin')

@section('title', 'Menu Settings')

@section('content')
<!-- BEGIN container -->
<div class="container">
    <!-- BEGIN row -->
    <div class="row justify-content-center">
        <!-- BEGIN col-10 -->
        <div class="col-xl-10">
            <!-- BEGIN row -->
            <div class="row">
                <!-- BEGIN col-9 -->
                <div class="col-xl-9">
                    <!-- BEGIN #menu -->
                    <div id="menu" class="mb-5">
                        <h4 class="d-flex align-items-center mb-1">
                            <iconify-icon icon="ph:gear" class="text-white text-opacity-50 fs-18px me-2 my-n2"></iconify-icon> Menu Category Settings
                        </h4>
                        <p class="text-white text-opacity-50 small">View, update and create your menu categories. Menu categories found not listed here will list after these in alphabetical order</p>
                        @if (session()->has('message'))
                            <div class="alert alert-{{ session('type', 'info') }}">
                                {{ session('message') }}
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Priority</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($menus as $menu)
                                            <tr>
                                                <td>{{ $menu->name }}</td>
                                                <td>{{ $menu->priority }}</td>
                                                <td>
                                                    <a href="#modalEditMenu" data-bs-toggle="modal" data-id="{{ $menu->id }}" data-name="{{ $menu->name }}" data-priority="{{ $menu->priority }}" class="btn btn-outline-theme btn-sm w-80px">Edit</a>
                                                    <form action="{{ route('settings.admin.deleteMenu') }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this menu category?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="hidden" name="id" value="{{ $menu->id }}">
                                                        <button type="submit" class="btn btn-outline-danger btn-sm w-80px">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <button class="btn btn-theme mt-3" data-bs-toggle="modal" data-bs-target="#modalCreateMenu">Create New Category</button>
                    </div>
                    <!-- END #menu -->

                </div>
                <!-- END col-9-->
            </div>
            <!-- END row -->
        </div>
        <!-- END col-10 -->
    </div>
    <!-- END row -->
</div>
<!-- END container -->
@endsection

@section('outter_content')
<!-- BEGIN #modalEditMenu -->
<div class="modal fade" id="modalEditMenu">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('settings.admin.updateMenu') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" id="modalMenuId">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" id="modalMenuName" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Priority</label>
                        <input type="number" name="priority" id="modalMenuPriority" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-theme">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END #modalEditMenu -->

<!-- BEGIN #modalCreateMenu -->
<div class="modal fade" id="modalCreateMenu">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create New Menu Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('settings.admin.createMenu') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Priority</label>
                        <input type="number" name="priority" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-theme">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END #modalCreateMenu -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var modalEditMenu = document.getElementById('modalEditMenu');
        modalEditMenu.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget;
            var id = button.getAttribute('data-id');
            var name = button.getAttribute('data-name');
            var priority = button.getAttribute('data-priority');
            var modalMenuId = modalEditMenu.querySelector('#modalMenuId');
            var modalMenuName = modalEditMenu.querySelector('#modalMenuName');
            var modalMenuPriority = modalEditMenu.querySelector('#modalMenuPriority');
            modalMenuId.value = id;
            modalMenuName.value = name;
            modalMenuPriority.value = priority;
        });
    });
</script>
@endsection
