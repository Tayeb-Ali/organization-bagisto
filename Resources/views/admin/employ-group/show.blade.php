@extends('admin::layouts.content')

@section('page_title')
    {{ __('organization::app.employ-group.show') }}
@stop


@section('content')

    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <i class="icon angle-left-icon back-link"
                   onclick="history.length > 1 ? history.go(-1) : window.location = '{{ route('admin.dashboard.index') }}';"></i>
                <h1>{{ __('organization::app.employ-group.title') }}</h1>
            </div>
            <div class="page-action">
                <a href="{{ route('admin.employ-group.edit', $employGroup->group_id) }}" title="Edit ClientGroup">
                    <button style="border: none; background-color: inherit;"><span class="icon pencil-lg-icon"></span>
                    </button>
                </a>
                <form method="POST" action="{{ route('admin.employ-group.delete', $employGroup->group_id) }}"
                      accept-charset="UTF-8" style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" style="border: none; background-color: inherit;" title="Delete ClientGroup"
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
                        <td>{{ $employGroup->group_id }}</td>
                    </tr>
                    <tr>
                        <td> {{ trans('organization::app.employ-group.fields.company_id') }} </td>
                        <td> {{ $employGroup->company_id }} </td>
                    </tr>
                    \n
                    <tr>
                        <td> {{ trans('organization::app.employ-group.fields.group_desc') }} </td>
                        <td> {{ $employGroup->group_desc }} </td>
                    </tr>
                    \n
                    <tr>
                        <td> {{ trans('organization::app.employ-group.fields.account_code') }} </td>
                        <td> {{ $employGroup->account_code }} </td>
                    </tr>
                    \n
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@stop
