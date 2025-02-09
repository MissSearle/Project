@extends('theme::layout.admin')

@section('title', 'Settings')

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
                    <!-- BEGIN #general -->
                    <div id="general" class="mb-5">
                        <h4 class="d-flex align-items-center mb-1">
                            <iconify-icon icon="solar:user-outline" class="text-white text-opacity-50 fs-18px me-2 my-n2"></iconify-icon> General
                        </h4>
                        <p class="text-white text-opacity-50 small">View and update your general website settings.</p>
                        @if (session()->has('message'))
                        <div class="alert alert-{{ session('type', 'info') }}">
                            {{ session('message') }}
                        </div>
                        @endif

                        <div class="card">
                            @foreach ($settings as $key => $setting)
                                <div class="card-body d-flex align-items-center">
                                    <div class="flex-fill">
                                        <div class="text-white text-opacity-50">{{ ucfirst(str_replace('_', ' ', $key)) }}</div>
                                        <div class="text-white">{{ $setting['value'] }}</div>
                                    </div>
                                    <div>
                                        <a href="#modalEdit" data-bs-toggle="modal" data-key="{{ $key }}" data-value="{{ $setting['value'] }}" data-type="{{ $setting['type'] }}" data-options="{{ json_encode($setting['options'] ?? []) }}" class="btn btn-outline-theme btn-sm w-80px">Edit</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- END #general -->

                </div>
                <!-- END col-9-->
                <!-- BEGIN col-3 -->
                <div class="col-xl-3">
                    <!-- BEGIN #sidebar-bootstrap -->
                    <nav id="sidebar-bootstrap" class="navbar navbar-sticky d-none d-xl-block">
                        <nav class="nav">
                            <a class="nav-link" href="#general" data-bs-toggle="scroll-to">General</a>
                        </nav>
                    </nav>
                    <!-- END #sidebar-bootstrap -->
                </div>
                <!-- END col-3 -->
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
<!-- BEGIN #modalEdit -->
<div class="modal fade" id="modalEdit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Settings</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('settings.admin.update') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" id="modalLabel"></label>
                        <input type="hidden" name="key" id="modalKey">
                        <div id="inputContainer"></div>
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
<!-- END #modalEdit -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var modalEdit = document.getElementById('modalEdit');
        modalEdit.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget;
            var key = button.getAttribute('data-key');
            var value = button.getAttribute('data-value');
            var type = button.getAttribute('data-type');
            var options = JSON.parse(button.getAttribute('data-options'));
            var modalLabel = modalEdit.querySelector('.modal-title');
            var modalKey = modalEdit.querySelector('#modalKey');
            var inputContainer = modalEdit.querySelector('#inputContainer');
            modalLabel.textContent = 'Edit ' + key.replace('_', ' ');
            modalKey.value = key;

            if (type === 'select') {
                var select = document.createElement('select');
                select.className = 'form-select';
                select.name = 'value';
                options.forEach(function(option) {
                    var optionElement = document.createElement('option');
                    optionElement.value = option;
                    optionElement.textContent = option;
                    if (option === value) {
                        optionElement.selected = true;
                    }
                    select.appendChild(optionElement);
                });
                inputContainer.innerHTML = '';
                inputContainer.appendChild(select);
            } else {
                var input = document.createElement('input');
                input.type = type;
                input.className = 'form-control';
                input.name = 'value';
                input.value = value;
                inputContainer.innerHTML = '';
                inputContainer.appendChild(input);
            }
        });
    });
</script>
@endsection


