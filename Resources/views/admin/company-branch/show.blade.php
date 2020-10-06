@extends('admin::layouts.content')

@section('page_title')
    {{ __('organization::app.companybranch.show') }}
@stop


@section('content')

    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <i class="icon angle-left-icon back-link"
                   onclick="history.length > 1 ? history.go(-1) : window.location = '{{ route('admin.dashboard.index') }}';"></i>
                <h1>{{ __('organization::app.companybranch.title') }}</h1>
            </div>
            <div class="page-action">
                <a href="{{ route('admin.company-branch.edit', $companybranch->branch_id) }}"
                   title="Edit CompanyBranch">
                    <button style="border: none; background-color: inherit;"><span class="icon pencil-lg-icon"></span>
                    </button>
                </a>
                <form method="POST" action="{{ route('admin.company-branch.delete', $companybranch->branch_id) }}"
                      accept-charset="UTF-8" style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" style="border: none; background-color: inherit;" title="Delete CompanyBranch"
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
                        <td>{{ $companybranch->branch_id }}</td>
                    </tr>
                    <tr>
                        <td> {{ trans('organization::app.companybranch.fields.company_id') }} </td>
                        <td> {{ $companybranch->company_id }} </td>
                    </tr>
                    \n
                    <tr>
                        <td> {{ trans('organization::app.companybranch.fields.short_desc') }} </td>
                        <td> {{ $companybranch->short_desc }} </td>
                    </tr>
                    \n
                    <tr>
                        <td> {{ trans('organization::app.companybranch.fields.description') }} </td>
                        <td> {{ $companybranch->description }} </td>
                    </tr>
                    \n
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@stop
