@extends('admin::layouts.content')

@section('page_title')
    {{ __('organization::app.store.edit-title') }}
@stop

@section('content')
    <div class="content">

        <form method="POST" action="{{ route('admin.store.edit', $store->store_id) }}">

            <div class="page-header">
                <div class="page-title">
                    <h1>
                        <i class="icon angle-left-icon back-link"
                           onclick="history.length > 1 ? history.go(-1) : window.location = '{{ route('admin.dashboard.index') }}';"></i>

                        {{ __('organization::app.store.edit-title') }}
                    </h1>
                </div>

                <div class="page-action">
                    <button type="submit" class="btn btn-lg btn-primary">
                        {{ __('organization::app.store.edit-btn-title') }}
                    </button>
                </div>
            </div>

            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <div class="page-content">

                <div class="form-container">
                    @csrf()
                    @include ('organization::admin.store.form', ['formMode' => 'edit'])
                </div>
            </div>
        </form>
    </div>
@stop

@push('scripts')
    <script src="{{ asset('vendor/webkul/admin/assets/js/tinyMCE/tinymce.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            tinymce.init({
                selector: 'textarea#content',
                height: 200,
                width: "100%",
                plugins: 'image imagetools media wordcount save fullscreen code',
                toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat | code',
                image_advtab: true,
                valid_elements: '*[*]'
            });
        });
    </script>
@endpush
