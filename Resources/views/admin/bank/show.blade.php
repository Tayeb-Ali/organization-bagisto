@extends('admin::layouts.content')

@section('page_title')
    {{ __('organization::app.bank.show') }}
@stop


@section('content')

    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <i class="icon angle-left-icon back-link"
                   onclick="history.length > 1 ? history.go(-1) : window.location = '{{ route('admin.dashboard.index') }}';"></i>
                <h1>{{ __('organization::app.bank.title') }}</h1>
            </div>
            <div class="page-action">
                <a href="{{ route('admin.bank.edit', $bank->code) }}" title="Edit Client">
                    <button style="border: none; background-color: inherit;"><span class="icon pencil-lg-icon"></span>
                    </button>
                </a>
                <form method="POST" action="{{ route('admin.bank.delete', $bank->code) }}" accept-charset="UTF-8"
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
                        <td>{{ $bank->code }}</td>
                    </tr>
                    <tr>
                        <td> {{ trans('organization::app.bank.fields.company_id') }} </td>
                        @if($bank->company)
                            <td> {{ $bank->company->description }} </td>
                        @else
                            <td> {{ $bank->company_id }} </td>
                        @endif
                    </tr>
                    \n
                    <tr>
                        <td> {{ trans('organization::app.bank.fields.group_id') }} </td>
                        <td> {{ $bank->group_id }} </td>
                    </tr>
                    \n
                    <tr>
                        <td> {{ trans('organization::app.bank.fields.cust_type') }} </td>
                        <td> {{ $bank->cust_type }} </td>
                    </tr>
                    \n
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@stop
