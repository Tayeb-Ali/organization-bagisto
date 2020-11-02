<accordian :title="'{{ __('organization::app.store-group.general') }}'" :active="true">
    <div slot="body">


        <div class="row">
            <div class="control-group col-6{{ $errors->has('group_desc') ? 'has-error' : ''}}">
                <label for="group_desc"
                       class="required">{{ __('organization::app.store-group.fields.group_desc') }}</label>

                <input class="control" name="group_desc" type="text" id="group_desc"
                       value="{{ isset($storeGroup->group_desc) ? $storeGroup->group_desc : ''}}" required>

                {!! $errors->first('group_desc', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col-6 {{ $errors->has('group_desc_o') ? 'has-error' : ''}}">
                <label for="group_desc_o" class="">{{ __('organization::app.store-group.fields.group_desc_o') }}</label>

                <input class="control" name="group_desc_o" type="text" id="group_desc_o"
                       value="{{ isset($storeGroup->group_desc_o) ? $storeGroup->group_desc_o : ''}}">

                {!! $errors->first('group_desc_o', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
{{--            <div class="control-group col-6 {{ $errors->has('group_code') ? 'has-error' : ''}}">--}}
{{--                <label for="group_code" class="">{{ __('organization::app.store-group.fields.group_code') }}</label>--}}

{{--                <input class="control" name="group_code" type="text" id="group_code"--}}
{{--                       value="{{ isset($storeGroup->group_code) ? $storeGroup->group_code : ''}}">--}}

{{--                {!! $errors->first('group_code', '<span class="control-error">:message</span>') !!}--}}
{{--            </div>--}}

{{--        <div class="row">--}}
{{--            <div class="control-group col-6{{ $errors->has('company_code') ? 'has-error' : ''}}">--}}
{{--                <label for="company_code"--}}
{{--                       class="required">{{ __('organization::app.store-group.fields.company_code') }}</label>--}}

{{--                <input class="control" name="company_code" type="text" id="company_code"--}}
{{--                       value="{{ isset($storeGroup->company_code) ? $storeGroup->company_code : ''}}" required>--}}

{{--                {!! $errors->first('company_code', '<span class="control-error">:message</span>') !!}--}}
{{--            </div>--}}

{{--        </div>--}}
        <div class="row">
            <div class="control-group col-6 {{ $errors->has('company_id') ? 'has-error' : ''}}">
                <label for="company_id"
                       class="required">{{ __('organization::app.store-group.fields.company_id') }}</label>

                <select id="company_id" name="company_id" class="form-control control" data-role="control">
                    @foreach($company as $item)
                        <option value="{{ $item->company_id }}" {{$storeGroup->company_id == $item->company_id ? 'selected' : '' }}>{{ $item->description }}</option>
                    @endforeach
                </select>
                {!! $errors->first('company_id', '<span class="control-error">:message</span>') !!}
            </div>

            <div class="control-group col-6{{ $errors->has('status') ? 'has-error' : ''}}">
                <label for="status" class="">{{ __('organization::app.store-group.fields.status') }}</label>

                <input class="control" name="status" type="text" id="status"
                       value="{{ isset($storeGroup->status) ? $storeGroup->status : ''}}">

                {!! $errors->first('status', '<span class="control-error">:message</span>') !!}
            </div>
        </div>

        <div class="row">
            <div class="control-group col-6 {{ $errors->has('cost_center_code') ? 'has-error' : ''}}">
                <label for="cost_center_code" class="">{{ __('organization::app.store-group.fields.cost_center_code') }}</label>

                <input class="control" name="cost_center_code" type="text" id="cost_center_code"
                       value="{{ isset($storeGroup->cost_center_code) ? $storeGroup->cost_center_code : ''}}">

                {!! $errors->first('cost_center_code', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col-6 {{ $errors->has('amend_date') ? 'has-error' : ''}}">
                <label for="amend_date" class="">{{ __('organization::app.store-group.fields.amend_date') }}</label>

                <input class="control" name="amend_date" type="datetime-local" id="amend_date"
                       value="{{ isset($storeGroup->amend_date) ? $storeGroup->amend_date : ''}}">

                {!! $errors->first('amend_date', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
    </div>
</accordian>
