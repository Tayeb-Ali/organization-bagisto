@extends('admin::layouts.content')

@section('page_title')
    {{ __('organization::app.treasur.show') }}
@stop


@section('content')

    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <i class="icon angle-left-icon back-link"
                   onclick="history.length > 1 ? history.go(-1) : window.location = '{{ route('admin.dashboard.index') }}';"></i>
                <h1>{{ __('organization::app.treasur.title') }}</h1>
            </div>
            <div class="page-action">
                <a href="{{ route('admin.treasur.edit', $treasure->treasur_id) }}" title="Edit treasur">
                    <button style="border: none; background-color: inherit;"><span class="icon pencil-lg-icon"></span>
                    </button>
                </a>
                <form method="POST" action="{{ route('admin.treasur.delete', $treasure->treasur_id) }}"
                      accept-charset="UTF-8" style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" style="border: none; background-color: inherit;" title="Delete treasur"
                            onclick="return confirm(&quot;Confirm delete?&quot;)">
                        <span class="icon trash-icon"></span>
                    </button>
                </form>
            </div>
        </div>

        <div class="page-content">
            <div class="table">

                <table class="table">
                    <tbody>
                    <tr>
                        <td>ID</td>
                        <td>{{ $treasure->treasur_id }}</td>
                    </tr>
                    <tr>
                        <td> {{ trans('organization::app.treasur.fields.company_id') }} </td>
                        <td> {{ $treasure->company_id }} </td>
                    </tr>
                    <tr>
                        <td> {{ trans('organization::app.treasur.fields.group_id') }} </td>
                        <td> {{ $treasure->group_id }} </td>
                    </tr>
                    <tr>
                        <td> {{ trans('organization::app.treasur.fields.cust_type') }} </td>
                        <td> {{ $treasure->cust_type }} </td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@stop
