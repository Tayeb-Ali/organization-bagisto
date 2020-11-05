@extends('admin::layouts.content')

@section('page_title')
{{ __('organization::app.group.show') }}
@stop


@section('content')

    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <i class="icon angle-left-icon back-link" onclick="history.length > 1 ? history.go(-1) : window.location = '{{ route('admin.dashboard.index') }}';"></i>
                <h1>{{ __('organization::app.group.title') }}</h1>
            </div>
            <div class="page-action">
                <a href="{{ route('admin.group.edit', $group->group_id) }}" title="Edit Group">
                  <button style="border: none; background-color: inherit;"><span class="icon pencil-lg-icon"></span></button>
                </a>
                <form method="POST" action="{{ route('admin.group.delete', $group->group_id) }}" accept-charset="UTF-8" style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" style="border: none; background-color: inherit;" title="Delete Group" onclick="return confirm(&quot;Confirm delete?&quot;)">
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
                        <td>{{ $group->group_id }}</td>
                    </tr>
                    <tr><td> {{ trans('organization::app.group.fields.company_id') }} </td><td> {{ $group->company_id }} </td></tr>\n<tr><td> {{ trans('organization::app.group.fields.group_desc') }} </td><td> {{ $group->group_desc }} </td></tr>\n<tr><td> {{ trans('organization::app.group.fields.account_code') }} </td><td> {{ $group->account_code }} </td></tr>\n
                </tbody>
            </table>

          </div>
        </div>
    </div>
@stop
