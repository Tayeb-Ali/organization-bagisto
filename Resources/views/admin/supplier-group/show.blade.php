@extends('admin::layouts.content')

@section('page_title')
{{ __('organization::app.suppliergroup.show') }}
@stop


@section('content')

    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <i class="icon angle-left-icon back-link" onclick="history.length > 1 ? history.go(-1) : window.location = '{{ route('admin.dashboard.index') }}';"></i>
                <h1>{{ __('organization::app.suppliergroup.title') }}</h1>
            </div>
            <div class="page-action">
                <a href="{{ route('admin.supplier-group.edit', $suppliergroup->group_id) }}" title="Edit SupplierGroup">
                  <button style="border: none; background-color: inherit;"><span class="icon pencil-lg-icon"></span></button>
                </a>
                <form method="POST" action="{{ route('admin.supplier-group.delete', $suppliergroup->group_id) }}" accept-charset="UTF-8" style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" style="border: none; background-color: inherit;" title="Delete SupplierGroup" onclick="return confirm(&quot;Confirm delete?&quot;)">
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
                        <td>{{ $suppliergroup->group_id }}</td>
                    </tr>
                    <tr><td> {{ trans('organization::app.suppliergroup.fields.company_id') }} </td><td> {{ $suppliergroup->company_id }} </td></tr>\n<tr><td> {{ trans('organization::app.suppliergroup.fields.group_desc') }} </td><td> {{ $suppliergroup->group_desc }} </td></tr>\n<tr><td> {{ trans('organization::app.suppliergroup.fields.account_code') }} </td><td> {{ $suppliergroup->account_code }} </td></tr>\n
                </tbody>
            </table>

          </div>
        </div>
    </div>
@stop
