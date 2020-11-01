<accordian :title="'{{ __('organization::app.treasur.general') }}'" :active="true">
    <div slot="body">

        <div class="row">
            <div class="control-group {{ $errors->has('name') ? 'has-error' : ''}}">
                <label for="name" class="required">{{ __('organization::app.treasur.fields.name') }}</label>

                <input class="control" name="name" type="text" id="name"
                       value="{{ isset($treasur->name) ? $treasur->name : ''}}" required>

                {!! $errors->first('name', '<span class="control-error">:message</span>') !!}
            </div>
        </div>

        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('company_id') ? 'has-error' : ''}}">
                <label for="company_id" class="required">{{ __('organization::app.treasur.fields.company_id') }}</label>

                <select id="company_id" name="company_id" class="form-control control" data-role="control">

                    @foreach($company as $item)
                        <option value="{{ $item->company_id }}" {{$treasur->company_id == $item->company_id ? 'selected' : '' }}>{{ $item->description }}</option>
                    @endforeach
                </select>
                {!! $errors->first('company_id', '<span class="control-error">:message</span>') !!}
            </div>

            <div class="control-group col col-6{{ $errors->has('group_id') ? 'has-error' : ''}}">
                <label for="group_id" class="required">{{ __('organization::app.treasur.fields.group_id') }}</label>

                <select id="group_id" name="group_id" class="form-control control" data-role="control">

                    @foreach($group as $item)
                        <option value="{{ $item->group_id }}" {{$treasur->group_id == $item->group_id ? 'selected' : '' }}>{{ $item->group_desc}}</option>
                    @endforeach
                </select>
                {!! $errors->first('group_id', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">

            <div class="control-group col-6 {{ $errors->has('status') ? 'has-error' : ''}}">
                <label for="status" class="">{{ __('organization::app.treasur.fields.status') }}</label>
                <select id="status" name="status" class="form-control control" data-role="control">
                    <option value="1" {{$treasur->status == 1 ? 'selected' : '' }}>Inactive</option>
                    <option value="2" {{$treasur->status ==2 ? 'selected' : '' }}>Active</option>
                </select>
                {!! $errors->first('status', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">

            <div class="control-group {{ $errors->has('credit_limit') ? 'has-error' : ''}}">
                <label for="credit_limit" class="">{{ __('organization::app.treasur.fields.credit_limit') }}</label>

                <input class="control" name="credit_limit" type="number" id="credit_limit"
                       value="{{ isset($treasur->credit_limit) ? $treasur->credit_limit : ''}}">

                {!! $errors->first('credit_limit', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('begin_bal_credit') ? 'has-error' : ''}}">
                <label for="begin_bal_credit"
                       class="">{{ __('organization::app.treasur.fields.begin_bal_credit') }}</label>

                <input class="control" name="begin_bal_credit" type="number" id="begin_bal_credit"
                       value="{{ isset($treasur->begin_bal_credit) ? $treasur->begin_bal_credit : ''}}">

                {!! $errors->first('begin_bal_credit', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group {{ $errors->has('begin_bal_debit') ? 'has-error' : ''}}">
                <label for="begin_bal_debit"
                       class="">{{ __('organization::app.treasur.fields.begin_bal_debit') }}</label>

                <input class="control" name="begin_bal_debit" type="number" id="begin_bal_debit"
                       value="{{ isset($treasur->begin_bal_debit) ? $treasur->begin_bal_debit : ''}}">

                {!! $errors->first('begin_bal_debit', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('curr_bal_credit') ? 'has-error' : ''}}">
                <label for="curr_bal_credit"
                       class="">{{ __('organization::app.treasur.fields.curr_bal_credit') }}</label>

                <input class="control" name="curr_bal_credit" type="number" id="curr_bal_credit"
                       value="{{ isset($treasur->curr_bal_credit) ? $treasur->curr_bal_credit : ''}}">

                {!! $errors->first('curr_bal_credit', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group {{ $errors->has('curr_bal_debit') ? 'has-error' : ''}}">
                <label for="curr_bal_debit" class="">{{ __('organization::app.treasur.fields.curr_bal_debit') }}</label>

                <input class="control" name="curr_bal_debit" type="number" id="curr_bal_debit"
                       value="{{ isset($treasur->curr_bal_debit) ? $treasur->curr_bal_debit : ''}}">

                {!! $errors->first('curr_bal_debit', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('amend_by') ? 'has-error' : ''}}">
                <label for="amend_by" class="">{{ __('organization::app.treasur.fields.amend_by') }}</label>

                <input class="control" name="amend_by" type="text" id="amend_by"
                       value="{{ isset($treasur->amend_by) ? $treasur->amend_by : ''}}">

                {!! $errors->first('amend_by', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group {{ $errors->has('amend_date') ? 'has-error' : ''}}">
                <label for="amend_date" class="">{{ __('organization::app.treasur.fields.amend_date') }}</label>

                <input class="control" name="amend_date" type="datetime-local" id="amend_date"
                       value="{{ isset($treasur->amend_date) ? $treasur->amend_date : ''}}">

                {!! $errors->first('amend_date', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('acc_mgr') ? 'has-error' : ''}}">
                <label for="acc_mgr" class="">{{ __('organization::app.treasur.fields.acc_mgr') }}</label>

                <input class="control" name="acc_mgr" type="text" id="acc_mgr"
                       value="{{ isset($treasur->acc_mgr) ? $treasur->acc_mgr : ''}}">

                {!! $errors->first('acc_mgr', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group {{ $errors->has('account_code') ? 'has-error' : ''}}">
                <label for="account_code" class="">{{ __('organization::app.treasur.fields.account_code') }}</label>

                <input class="control" name="account_code" type="text" id="account_code"
                       value="{{ isset($treasur->account_code) ? $treasur->account_code : ''}}">

                {!! $errors->first('account_code', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('last_trns_date') ? 'has-error' : ''}}">
                <label for="last_trns_date" class="">{{ __('organization::app.treasur.fields.last_trns_date') }}</label>

                <input class="control" name="last_trns_date" type="datetime-local" id="last_trns_date"
                       value="{{ isset($treasur->last_trns_date) ? $treasur->last_trns_date : ''}}">

                {!! $errors->first('last_trns_date', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group {{ $errors->has('last_trns_value') ? 'has-error' : ''}}">
                <label for="last_trns_value"
                       class="">{{ __('organization::app.treasur.fields.last_trns_value') }}</label>

                <input class="control" name="last_trns_value" type="number" id="last_trns_value"
                       value="{{ isset($treasur->last_trns_value) ? $treasur->last_trns_value : ''}}">

                {!! $errors->first('last_trns_value', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('last_trns_type') ? 'has-error' : ''}}">
                <label for="last_trns_type" class="">{{ __('organization::app.treasur.fields.last_trns_type') }}</label>

                <input class="control" name="last_trns_type" type="text" id="last_trns_type"
                       value="{{ isset($treasur->last_trns_type) ? $treasur->last_trns_type : ''}}">

                {!! $errors->first('last_trns_type', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group {{ $errors->has('begin_bal_credit_fc') ? 'has-error' : ''}}">
                <label for="begin_bal_credit_fc"
                       class="">{{ __('organization::app.treasur.fields.begin_bal_credit_fc') }}</label>

                <input class="control" name="begin_bal_credit_fc" type="number" id="begin_bal_credit_fc"
                       value="{{ isset($treasur->begin_bal_credit_fc) ? $treasur->begin_bal_credit_fc : ''}}">

                {!! $errors->first('begin_bal_credit_fc', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('begin_bal_debit_fc') ? 'has-error' : ''}}">
                <label for="begin_bal_debit_fc"
                       class="">{{ __('organization::app.treasur.fields.begin_bal_debit_fc') }}</label>

                <input class="control" name="begin_bal_debit_fc" type="number" id="begin_bal_debit_fc"
                       value="{{ isset($treasur->begin_bal_debit_fc) ? $treasur->begin_bal_debit_fc : ''}}">

                {!! $errors->first('begin_bal_debit_fc', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group {{ $errors->has('curr_bal_credit_fc') ? 'has-error' : ''}}">
                <label for="curr_bal_credit_fc"
                       class="">{{ __('organization::app.treasur.fields.curr_bal_credit_fc') }}</label>

                <input class="control" name="curr_bal_credit_fc" type="number" id="curr_bal_credit_fc"
                       value="{{ isset($treasur->curr_bal_credit_fc) ? $treasur->curr_bal_credit_fc : ''}}">

                {!! $errors->first('curr_bal_credit_fc', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('curr_bal_debit_fc') ? 'has-error' : ''}}">
                <label for="curr_bal_debit_fc"
                       class="">{{ __('organization::app.treasur.fields.curr_bal_debit_fc') }}</label>

                <input class="control" name="curr_bal_debit_fc" type="number" id="curr_bal_debit_fc"
                       value="{{ isset($treasur->curr_bal_debit_fc) ? $treasur->curr_bal_debit_fc : ''}}">

                {!! $errors->first('curr_bal_debit_fc', '<span class="control-error">:message</span>') !!}
            </div>
        </div>

        <div class="row">
            <div class="control-group {{ $errors->has('analysis_code') ? 'has-error' : ''}}">
                <label for="analysis_code" class="">{{ __('organization::app.treasur.fields.analysis_code') }}</label>

                <input class="control" name="analysis_code" type="text" id="analysis_code"
                       value="{{ isset($treasur->analysis_code) ? $treasur->analysis_code : ''}}">

                {!! $errors->first('analysis_code', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('currency_code') ? 'has-error' : ''}}">
                <label for="currency_code"
                       class="required">{{ __('organization::app.bank.fields.currency_code') }}</label>

                <select id="currency_code" name="currency_code" class="form-control control" data-role="control">

                    @foreach($currency as $item)
                        <option value="{{ $item->id }}" {{$treasur->currency_code == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                    @endforeach
                </select>
                {!! $errors->first('currency_code', '<span class="control-error">:message</span>') !!}
            </div>

        </div>

    </div>
</accordian>
