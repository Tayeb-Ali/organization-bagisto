@extends('admin::layouts.content')

@section('page_title')
    {{ __('organization::app.bank.title') }}
@stop


@section('content')

    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h1>{{ __('organization::app.bank.title') }}</h1>
            </div>
            <div class="page-action">
                <a href="{{ route('admin.bank.create') }}" class="btn btn-lg btn-primary" title="Add New bank">
                    {{ __('organization::app.bank.add-title') }}
                </a>
            </div>
        </div>

        <div class="page-content">
            <div class="table">
                <div class="grid-container">

                    <div class="filter-row-one" id="datagrid-filters">

                        <div class="search-filter">
                            <form method="GET" action="{{ route('admin.bank.index') }}" accept-charset="UTF-8"
                                  class="" style="display: contents;" role="search">
                                <input type="search" id="search-field" name="search" class="control"
                                       placeholder="{{ __('ui::app.datagrid.search') }}"/>
                                <div class="icon-wrapper">
                                    <button class="icon search-icon search-btn" type="submit"
                                            style="border: 0px; background-color: inherit;"></button>
                                </div>
                            </form>
                        </div>

                        <div class="dropdown-filters per-page">
                            <form method="GET" action="{{ url()->current() }}">
                                <div class="control-group">
                                    <label class="per-page-label" for="perPage">
                                        {{ __('ui::app.datagrid.items-per-page') }}
                                    </label>
                                    <select id="perPage" name="perPage" class="control" onchange="this.form.submit();">
                                        <option value="10"{{ request()->get('perPage') == 10 ? ' selected' : '' }}> 10
                                        </option>
                                        <option value="20"{{ request()->get('perPage') == 20 ? ' selected' : '' }}> 20
                                        </option>
                                        <option value="30"{{ request()->get('perPage') == 30 ? ' selected' : '' }}> 30
                                        </option>
                                        <option value="40"{{ request()->get('perPage') == 40 ? ' selected' : '' }}> 40
                                        </option>
                                        <option value="50"{{ request()->get('perPage') == 50 ? ' selected' : '' }}> 50
                                        </option>
                                    </select>
                                </div>
                            </form>
                        </div>

                    </div>

                    <div class="filter-row-two">
                    </div>

                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ trans('organization::app.bank.fields.name') }}</th>
                            <th>{{ trans('organization::app.bank.fields.status') }}</th>
                            <th>{{ trans('organization::app.bank.fields.account_no') }}</th>
                            <th>{{ trans('organization::app.bank.fields.bank_name') }}</th>
                            <th>{{ trans('organization::app.bank.fields.currency') }}</th>

                            <th>Actions</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($bank as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->account_no }}</td>
                                <td>{{ $item->bank_name }}</td>
                                <td>{{ $item->currency }}</td>
                                <td class="actions" style="white-space: nowrap; width: 100px;">
                                    <div class="action">
                                        <a href="{{ route('admin.bank.show', $item->code) }}"
                                           title="View Client">
                                            <button style="border: none; background-color: inherit;"><span
                                                        class="icon eye-icon"></span></button>
                                        </a>
                                        <a href="{{ route('admin.bank.edit', $item->code) }}"
                                           title="Edit Client">
                                            <button style="border: none; background-color: inherit;"><span
                                                        class="icon pencil-lg-icon"></span></button>
                                        </a>

                                        <form method="POST"
                                              action="{{ route('admin.bank.delete', $item->code) }}"
                                              accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" style="border: none; background-color: inherit;"
                                                    title="Delete Client"
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
                    <div class="pagination"> {!! $bank->appends(['search' => Request::get('search')])->render() !!} </div>

                </div>
            </div>

        </div>
    </div>


@stop
