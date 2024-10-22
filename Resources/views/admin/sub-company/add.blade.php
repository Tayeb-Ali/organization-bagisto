@extends('admin::layouts.content')

@section('page_title')
    {{ __('organization::app.company.edit-title') }}
@stop

@section('content')
    <div class="content">

        <form method="POST" action="{{ route('admin.sub_company.update', $company->company_id) }}">

            <div class="page-header">
                <div class="page-title">
                    <h1>
                        <i class="icon angle-left-icon back-link" onclick="history.length > 1 ? history.go(-1) : window.location = '{{ route('admin.dashboard.index') }}';"></i>

                        {{ __('organization::app.company.sub-company.edit-title') }}
                    </h1>
                </div>

                <div class="page-action">
                    <button type="submit" class="btn btn-lg btn-primary">
                        {{ __('organization::app.company.sub-company.edit-btn-title') }}
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
                    @include ('organization::admin.sub-company.form', ['formMode' => 'edit'])
                </div>
            </div>
        </form>
    </div>
@stop

