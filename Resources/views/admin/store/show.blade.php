@extends('admin::layouts.content')

@section('page_title')
    {{ __('organization::app.store.show') }}
@stop


@section('content')

    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <i class="icon angle-left-icon back-link"
                   onclick="history.length > 1 ? history.go(-1) : window.location = '{{ route('admin.dashboard.index') }}';"></i>
                <h1>{{ __('organization::app.store.title') }}</h1>
            </div>
            <div class="page-action">
                <a href="{{ route('admin.store.edit', $store->code) }}" title="Edit Client">
                    <button style="border: none; background-color: inherit;"><span class="icon pencil-lg-icon"></span>
                    </button>
                </a>
                <form method="POST" action="{{ route('admin.store.delete', $store->code) }}" accept-charset="UTF-8"
                      style="display:inline">
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
                        <td>{{ $store->code }}</td>
                    </tr>
                    <tr>
                        <td> {{ trans('organization::app.store.fields.company_id') }} </td>
                        @if($store->company)
                            <td> {{ $store->company->description }} </td>
                        @else
                            <td> {{ $store->company_id }} </td>
                        @endif
                    </tr>
                    <tr>
                        <td> {{ trans('organization::app.store.fields.group_id') }} </td>
                        <td> {{ $store->group_id }} </td>
                    </tr>
                    <tr>
                        <td> {{ trans('organization::app.store.fields.cust_type') }} </td>
                        <td> {{ $store->cust_type }} </td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@stop
