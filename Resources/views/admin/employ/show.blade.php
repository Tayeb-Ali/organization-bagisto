@extends('admin::layouts.content')

@section('page_title')
    {{ __('organization::app.employ.show') }}
@stop


@section('content')

    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <i class="icon angle-left-icon back-link"
                   onclick="history.length > 1 ? history.go(-1) : window.location = '{{ route('admin.dashboard.index') }}';"></i>
                <h1>{{ __('organization::app.employ.title') }}</h1>
            </div>
            <div class="page-action">
                <a href="{{ route('admin.employ.edit', $employ->employee_id) }}" title="Edit Client">
                    <button style="border: none; background-color: inherit;"><span class="icon pencil-lg-icon"></span>
                    </button>
                </a>
                <form method="POST" action="{{ route('admin.employ.delete', $employ->employee_id) }}"
                      accept-charset="UTF-8" style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" style="border: none; background-color: inherit;" title="Delete Client"
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
                        <td>{{ $employ->employee_id }}</td>
                    </tr>
                    <tr>
                        <td> {{ trans('organization::app.employ.fields.company_id') }} </td>
                        <td> {{ $employ->company_id }} </td>
                    </tr>
                    \n
                    <tr>
                        <td> {{ trans('organization::app.employ.fields.group_id') }} </td>
                        <td> {{ $employ->group_id }} </td>
                    </tr>
                    \n
                    <tr>
                        <td> {{ trans('organization::app.employ.fields.cust_type') }} </td>
                        <td> {{ $employ->cust_type }} </td>
                    </tr>
                    \n
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@stop
