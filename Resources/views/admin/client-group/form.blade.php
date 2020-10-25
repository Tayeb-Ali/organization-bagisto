<accordian :title="'{{ __('organization::app.clientgroup.general') }}'" :active="true">
    <div slot="body">


        <div class="row">
            <div class="control-group col-6{{ $errors->has('group_desc') ? 'has-error' : ''}}">
                <label for="group_desc"
                       class="required">{{ __('organization::app.clientgroup.fields.group_desc') }}</label>

                <input class="control" name="group_desc" type="text" id="group_desc"
                       value="{{ isset($clientgroup->group_desc) ? $clientgroup->group_desc : ''}}" required>

                {!! $errors->first('group_desc', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col-6 {{ $errors->has('account_code') ? 'has-error' : ''}}">
                <label for="account_code" class="">{{ __('organization::app.clientgroup.fields.account_code') }}</label>

                <input class="control" name="account_code" type="text" id="account_code"
                       value="{{ isset($clientgroup->account_code) ? $clientgroup->account_code : ''}}">

                {!! $errors->first('account_code', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col-6 {{ $errors->has('company_id') ? 'has-error' : ''}}">
                <label for="company_id"
                       class="required">{{ __('organization::app.clientgroup.fields.company_id') }}</label>

                <select id="company_id" name="company_id" class="form-control" data-role="control">
                    @foreach($company as $item)
                        <option value="{{ $item->company_id }}" {{$clientgroup->company_id == $item->company_id ? 'selected' : '' }}>{{ $item->description }}</option>
                    @endforeach
                </select>
                {!! $errors->first('company_id', '<span class="control-error">:message</span>') !!}
            </div>

            <div class="control-group col-6{{ $errors->has('status') ? 'has-error' : ''}}">
                <label for="status" class="">{{ __('organization::app.clientgroup.fields.status') }}</label>

                <input class="control" name="status" type="text" id="status"
                       value="{{ isset($clientgroup->status) ? $clientgroup->status : ''}}">

                {!! $errors->first('status', '<span class="control-error">:message</span>') !!}
            </div>
        </div>

        <div class="row">
            <div class="control-group col-6 {{ $errors->has('amend_by') ? 'has-error' : ''}}">
                <label for="amend_by" class="">{{ __('organization::app.clientgroup.fields.amend_by') }}</label>

                <input class="control" name="amend_by" type="text" id="amend_by"
                       value="{{ isset($clientgroup->amend_by) ? $clientgroup->amend_by : ''}}">

                {!! $errors->first('amend_by', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col-6 {{ $errors->has('amend_date') ? 'has-error' : ''}}">
                <label for="amend_date" class="">{{ __('organization::app.clientgroup.fields.amend_date') }}</label>

                <input class="control" name="amend_date" type="datetime-local" id="amend_date"
                       value="{{ isset($clientgroup->amend_date) ? $clientgroup->amend_date : ''}}">

                {!! $errors->first('amend_date', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
    </div>
</accordian>
