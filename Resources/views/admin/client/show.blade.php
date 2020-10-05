@extends('admin::layouts.content')

@section('page_title')
{{ __('organization::app.client.show') }}
@stop


@section('content')

    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <i class="icon angle-left-icon back-link" onclick="history.length > 1 ? history.go(-1) : window.location = '{{ route('admin.dashboard.index') }}';"></i>
                <h1>{{ __('organization::app.client.title') }}</h1>
            </div>
            <div class="page-action">
                <a href="{{ route('admin.client.edit', $client->client_id) }}" title="Edit Client">
                  <button style="border: none; background-color: inherit;"><span class="icon pencil-lg-icon"></span></button>
                </a>
                <form method="POST" action="{{ route('admin.client.delete', $client->client_id) }}" accept-charset="UTF-8" style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" style="border: none; background-color: inherit;" title="Delete Client" onclick="return confirm(&quot;Confirm delete?&quot;)">
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
                        <td>{{ $client->client_id }}</td>
                    </tr>
                    <tr><td> {{ trans('organization::app.client.fields.company_id') }} </td><td> {{ $client->company_id }} </td></tr>\n<tr><td> {{ trans('organization::app.client.fields.group_id') }} </td><td> {{ $client->group_id }} </td></tr>\n<tr><td> {{ trans('organization::app.client.fields.cust_type') }} </td><td> {{ $client->cust_type }} </td></tr>\n
                </tbody>
            </table>

          </div>
        </div>
    </div>
@stop
