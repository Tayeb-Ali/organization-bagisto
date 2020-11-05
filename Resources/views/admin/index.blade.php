@extends('admin::layouts.content')

@section('page_title')
    {{ __('organization::app.organization.title') }}
@stop

@section('content')
    Welcome back!
    مرحب بعودتك!

    <form method="POST" action="{{ route('admin.company.select-company') }}">
        @csrf()

        <div class="page-header">
            {{--            <div class="page-title">--}}
            {{--                <h1>--}}
            {{--                    <i class="icon angle-left-icon back-link" onclick="history.length > 1 ? history.go(-1) : window.location = '{{ route('admin.dashboard.index') }}';"></i>--}}

            {{--                    {{ __('organization::app.company.select-title') }}--}}
            {{--                </h1>--}}
            {{--            </div>--}}


        </div>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <div class="row">
            <div class="control-group col col-3 {{ $errors->has('company_id') ? 'has-error' : ''}}">
                <label for="company_id" class="required">{{ __('organization::app.company.fields.company_id') }}</label>

                <select id="company_id" name="company_id" class="form-control control" data-role="control">

                    @foreach($company as $item)
                        <option value="{{ $item->company_id }}">{{ $item->description }}</option>
                    @endforeach
                </select>
                {!! $errors->first('company_id', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="col col-sm-2">
                <button type="submit" class="btn btn-lg btn-primary">
                    {{ __('organization::app.company.create-btn-title') }}
                </button>
            </div>
        </div>


    </form>
@stop
