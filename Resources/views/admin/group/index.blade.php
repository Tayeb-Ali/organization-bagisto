@extends('admin::layouts.content')

@section('page_title')
    {{ __('organization::app.group.title') }}
@stop


@section('content')

    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h1>{{ __('organization::app.group.title') }}</h1>
            </div>
            <div class="page-action">
                <a href="{{ route('admin.group.create') }}" class="btn btn-lg btn-primary"
                   title="Add New Group">
                    {{ __('organization::app.group.add-title') }}
                </a>
            </div>
        </div>

        <div class="page-content">
            <div class="table">
                <div class="grid-container">

                    <div class="filter-row-one" id="datagrid-filters">

                        <div class="search-filter">
                            <form method="GET" action="{{ route('admin.group.index') }}" accept-charset="UTF-8"
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
                            <th>{{ trans('organization::app.group.fields.group_desc') }}</th>
                            <th>{{ trans('organization::app.group.fields.company_id') }}</th>
                            <th>{{ trans('organization::app.group.fields.account_code') }}</th>
                            <th>Actions</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($group as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->group_desc }}</td>
                                @if($item->company)
                                    <td>{{ $item->company->description }}</td>
                                @else
                                    <td>{{ $item->company_id }}</td>
                                @endif
                                <td>{{ $item->account_code }}</td>

                                <td class="actions" style="white-space: nowrap; width: 100px;">
                                    <div class="action">
                                        <a href="{{ route('admin.group.show', $item->group_id) }}"
                                           title="View Group">
                                            <button style="border: none; background-color: inherit;"><span
                                                        class="icon eye-icon"></span></button>
                                        </a>
                                        <a href="{{ route('admin.group.edit', $item->group_id) }}"
                                           title="Edit Group">
                                            <button style="border: none; background-color: inherit;"><span
                                                        class="icon pencil-lg-icon"></span></button>
                                        </a>

                                        <form method="POST"
                                              action="{{ route('admin.group.delete', $item->group_id) }}"
                                              accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" style="border: none; background-color: inherit;"
                                                    title="Delete Group"
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
                    <div class="pagination"> {!! $group->appends(['search' => Request::get('search')])->render() !!} </div>

                </div>
            </div>
        </div>
    </div>


@stop
