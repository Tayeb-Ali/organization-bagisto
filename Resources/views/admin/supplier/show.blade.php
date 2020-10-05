@extends('admin::layouts.content')

@section('page_title')
{{ __('organization::app.supplier.show') }}
@stop


@section('content')

    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <i class="icon angle-left-icon back-link" onclick="history.length > 1 ? history.go(-1) : window.location = '{{ route('admin.dashboard.index') }}';"></i>
                <h1>{{ __('organization::app.supplier.title') }}</h1>
            </div>
            <div class="page-action">
                <a href="{{ route('admin.supplier.edit', $supplier->client_id) }}" title="Edit Supplier">
                  <button style="border: none; background-color: inherit;"><span class="icon pencil-lg-icon"></span></button>
                </a>
                <form method="POST" action="{{ route('admin.supplier.delete', $supplier->client_id) }}" accept-charset="UTF-8" style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" style="border: none; background-color: inherit;" title="Delete Supplier" onclick="return confirm(&quot;Confirm delete?&quot;)">
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
                        <td>{{ $supplier->client_id }}</td>
                    </tr>
                    <tr><td> {{ trans('organization::app.supplier.fields.company_id') }} </td><td> {{ $supplier->company_id }} </td></tr>\n<tr><td> {{ trans('organization::app.supplier.fields.group_id') }} </td><td> {{ $supplier->group_id }} </td></tr>\n<tr><td> {{ trans('organization::app.supplier.fields.supp_type') }} </td><td> {{ $supplier->supp_type }} </td></tr>\n
                </tbody>
            </table>

          </div>
        </div>
    </div>
@stop
