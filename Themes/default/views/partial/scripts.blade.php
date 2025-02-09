<!-- ================== BEGIN BASE JS ================== -->
<script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>

<script src="{{ theme_asset('js/vendor.min.js') }}"></script>
<script src="{{ theme_asset('js/app.min.js') }}"></script>
<script src="{{ theme_asset('plugins/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
<script src="{{ theme_asset('plugins/jquery-typeahead/dist/jquery.typeahead.min.js') }}"></script>
<script src="{{ theme_asset('plugins/tag-it/js/tag-it.min.js') }}"></script>

<script>
    $(document).ready(function() {
                $('#jquery-tagit').tagit({
                    fieldName: 'user_ids[]', 
                    allowSpaces: true,
                    autocomplete: {
                        delay: 0,
                        minLength: 3,
                        source: function(request, response) {
                            $.ajax({
                                url: '{{ route('users.search') }}',
                                method: 'GET',
                                data: {
                                    q: request.term
                                },
                                success: function(data) {
                                    if (data.length === 0) {
                                        response([{
                                            label: 'No users found',
                                            value: ''
                                        }]);
                                    } else {
                                        response($.map(data, function(user) {
                                            return {
                                                label: user.name, 
                                                value: user.id
                                            };
                                        }));
                                    }
                                },
                                error: function(xhr) {
                                    console.error('AJAX error:', xhr.status, xhr.responseText);
                                    response([{
                                        label: 'Error fetching users',
                                        value: ''
                                    }]);
                                }
                            });
                        },
                        select: function(event, ui) {
                            if (ui.item.value) {
                                if (!$('#jquery-tagit').tagit('assignedTags').includes(ui.item.label)) {
                                    $('#jquery-tagit').tagit('createTag', ui.item.label);
                                    var newTag = $('#jquery-tagit').children('li.tagit-choice:last');
                                    newTag.data('value', ui.item.value); 
                                    newTag.find('input').val(ui.item.value); 
                                }
                            }
                            return false;
                        }
                    }
                });

                $(function() {
                    $.typeahead({
                        input: "#typeahead",
                        order: "desc",
                        minLength: 3,
                        display: "name",
                        dynamic: true,
                        cache: false,
                        source: {
                            users: {
                                ajax: {
                                    url: "{{ route('users.search') }}",
                                    data: function () {
                                        return {
                                            q: $("#typeahead").val()
                                        };
                                    }
                                }
                            }
                        },
                        callback: {
                            onClickAfter: function (node, a, item, event) {
                                $("#selected_user_id").val(item.id);
                                console.log("Selected user:", item);
                            }
                        }
                    });
                });




    });
</script>
<!-- ================== END BASE JS ================== -->

@stack('js')