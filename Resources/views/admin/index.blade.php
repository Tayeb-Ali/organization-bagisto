@extends('admin::layouts.content')

@section('page_title')
{{ __('organization::app.organization.title') }}
@stop

@section('content')
    <h1>Hello</h1>

    <p>
        This view is loaded from module: {!! config('organization.name') !!}
    </p>
@stop
