@extends('admin::layouts.content')

@section('page_title')
    {{ __('organization::app.company.show') }}
@stop


@section('content')

    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <i class="icon angle-left-icon back-link"
                   onclick="history.length > 1 ? history.go(-1) : window.location = '{{ route('admin.dashboard.index') }}';"></i>
                <h1>{{ __('organization::app.company.title') }}</h1>
            </div>
            <div class="page-action">
                <a href="{{ route('admin.company.edit', $company->company_id) }}" title="Edit Company">
                    <button style="border: none; background-color: inherit;"><span class="icon pencil-lg-icon"></span>
                    </button>
                </a>
                <form method="POST" action="{{ route('admin.company.delete', $company->company_id) }}"
                      accept-charset="UTF-8" style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" style="border: none; background-color: inherit;" title="Delete Company"
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
                        <td>{{ $company->company_id }}</td>
                    </tr>
                    <tr>
                        <td> {{ trans('organization::app.company.fields.description') }} </td>
                        <td> {{ $company->description }} </td>
                    </tr>
                    <tr>
                        <td> {{ trans('organization::app.company.fields.currency') }} </td>
                        <td> {{ $company->currency }} </td>
                    </tr>

                    <tr>
                        <td> {{ trans('organization::app.company.fields.status') }} </td>
                        <td> {{ $company->status }} </td>
                    </tr>

                    </tbody>
                </table>

            </div>
            @if ($subCompany)
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ trans('organization::app.company.fields.description') }}</th>
                        <th>{{ trans('organization::app.company.fields.currency') }}</th>
                        <th>{{ trans('organization::app.company.fields.status') }}</th>
                        <th>Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($subCompany as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->currency }}</td>
                            <td>{{ $item->status }}</td>
                            <td class="actions" style="white-space: nowrap; width: 100px;">
                                <div class="action">
                                    <a href="{{ route('admin.company.show', $item->company_id) }}"
                                       title="View Company">
                                        <button style="border: none; background-color: inherit;"><span
                                                class="icon eye-icon"></span></button>
                                    </a>
                                    <a href="{{ route('admin.company.edit', $item->company_id) }}"
                                       title="Edit Company">
                                        <button style="border: none; background-color: inherit;"><span
                                                class="icon pencil-lg-icon"></span></button>
                                    </a>

                                    <form method="POST"
                                          action="{{ route('admin.sub_company.delete', $item->company_id) }}"
                                          accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" style="border: none; background-color: inherit;"
                                                title="Delete Company"
                                                onclick="return confirm(&quot;Confirm delete?&quot;)">
                                            <span class="icon trash-icon"></span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            @else
                <p>Main company</p>
            @endif
        </div>
    </div>
@stop
