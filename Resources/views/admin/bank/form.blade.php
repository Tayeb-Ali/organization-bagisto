<accordian :title="'{{ __('organization::app.bank.general') }}'" :active="true">
    <div slot="body">

        <div class="row">
            <div class="control-group {{ $errors->has('name') ? 'has-error' : ''}}">
                <label for="name" class="required">{{ __('organization::app.bank.fields.name') }}</label>

                <input class="control" name="name" type="text" id="name"
                       value="{{ isset($bank->name) ? $bank->name : ''}}" required>

                {!! $errors->first('name', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('company_id') ? 'has-error' : ''}}">
                <label for="company_id" class="required">{{ __('organization::app.bank.fields.company_id') }}</label>

                <select id="company_id" name="company_id" class="form-control control" data-role="control">

                    @foreach($company as $item)
                        <option value="{{ $item->company_id }}" {{$bank->company_id == $item->company_id ? 'selected' : '' }}>{{ $item->description }}</option>
                    @endforeach
                </select>
                {!! $errors->first('company_id', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('fax') ? 'has-error' : ''}}">
                <label for="fax" class="">{{ __('organization::app.bank.fields.fax') }}</label>

                <input class="control" name="fax" type="text" id="fax"
                       value="{{ isset($bank->fax) ? $bank->fax : ''}}">

                {!! $errors->first('fax', '<span class="control-error">:message</span>') !!}
            </div>

            <div class="control-group col col-6 {{ $errors->has('pobox') ? 'has-error' : ''}}">
                <label for="pobox" class="">{{ __('organization::app.bank.fields.pobox') }}</label>

                <input class="control" name="pobox" type="text" id="pobox"
                       value="{{ isset($bank->pobox) ? $bank->pobox : ''}}">

                {!! $errors->first('pobox', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col col-6{{ $errors->has('email') ? 'has-error' : ''}}">
                <label for="email" class="">{{ __('organization::app.bank.fields.email') }}</label>

                <input class="control" name="email" type="text" id="email"
                       value="{{ isset($bank->email) ? $bank->email : ''}}">

                {!! $errors->first('email', '<span class="control-error">:message</span>') !!}
            </div>

            <div class="control-group col-6 {{ $errors->has('status') ? 'has-error' : ''}}">
                <label for="status" class="">{{ __('organization::app.bank.fields.status') }}</label>

                <input class="control" name="status" type="text" id="status"
                       value="{{ isset($bank->status) ? $bank->status : ''}}">

                {!! $errors->first('status', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">

            <div class="control-group {{ $errors->has('credit_limit') ? 'has-error' : ''}}">
                <label for="credit_limit" class="">{{ __('organization::app.bank.fields.credit_limit') }}</label>

                <input class="control" name="credit_limit" type="number" id="credit_limit"
                       value="{{ isset($bank->credit_limit) ? $bank->credit_limit : ''}}">

                {!! $errors->first('credit_limit', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('begin_bal_credit') ? 'has-error' : ''}}">
                <label for="begin_bal_credit"
                       class="">{{ __('organization::app.bank.fields.begin_bal_credit') }}</label>

                <input class="control" name="begin_bal_credit" type="number" id="begin_bal_credit"
                       value="{{ isset($bank->begin_bal_credit) ? $bank->begin_bal_credit : ''}}">

                {!! $errors->first('begin_bal_credit', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group {{ $errors->has('begin_bal_debit') ? 'has-error' : ''}}">
                <label for="begin_bal_debit"
                       class="">{{ __('organization::app.bank.fields.begin_bal_debit') }}</label>

                <input class="control" name="begin_bal_debit" type="number" id="begin_bal_debit"
                       value="{{ isset($bank->begin_bal_debit) ? $bank->begin_bal_debit : ''}}">

                {!! $errors->first('begin_bal_debit', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('curr_bal_credit') ? 'has-error' : ''}}">
                <label for="curr_bal_credit"
                       class="">{{ __('organization::app.bank.fields.curr_bal_credit') }}</label>

                <input class="control" name="curr_bal_credit" type="number" id="curr_bal_credit"
                       value="{{ isset($bank->curr_bal_credit) ? $bank->curr_bal_credit : ''}}">

                {!! $errors->first('curr_bal_credit', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group {{ $errors->has('curr_bal_debit') ? 'has-error' : ''}}">
                <label for="curr_bal_debit" class="">{{ __('organization::app.bank.fields.curr_bal_debit') }}</label>

                <input class="control" name="curr_bal_debit" type="number" id="curr_bal_debit"
                       value="{{ isset($bank->curr_bal_debit) ? $bank->curr_bal_debit : ''}}">

                {!! $errors->first('curr_bal_debit', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('amend_by') ? 'has-error' : ''}}">
                <label for="amend_by" class="">{{ __('organization::app.bank.fields.amend_by') }}</label>

                <input class="control" name="amend_by" type="text" id="amend_by"
                       value="{{ isset($bank->amend_by) ? $bank->amend_by : ''}}">

                {!! $errors->first('amend_by', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group {{ $errors->has('amend_date') ? 'has-error' : ''}}">
                <label for="amend_date" class="">{{ __('organization::app.bank.fields.amend_date') }}</label>

                <input class="control" name="amend_date" type="datetime-local" id="amend_date"
                       value="{{ isset($bank->amend_date) ? $bank->amend_date : ''}}">

                {!! $errors->first('amend_date', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('acc_mgr') ? 'has-error' : ''}}">
                <label for="acc_mgr" class="">{{ __('organization::app.bank.fields.acc_mgr') }}</label>

                <input class="control" name="acc_mgr" type="text" id="acc_mgr"
                       value="{{ isset($bank->acc_mgr) ? $bank->acc_mgr : ''}}">

                {!! $errors->first('acc_mgr', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group {{ $errors->has('account_code') ? 'has-error' : ''}}">
                <label for="account_code" class="">{{ __('organization::app.bank.fields.account_code') }}</label>

                <input class="control" name="account_code" type="text" id="account_code"
                       value="{{ isset($bank->account_code) ? $bank->account_code : ''}}">

                {!! $errors->first('account_code', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('last_trns_date') ? 'has-error' : ''}}">
                <label for="last_trns_date" class="">{{ __('organization::app.bank.fields.last_trns_date') }}</label>

                <input class="control" name="last_trns_date" type="datetime-local" id="last_trns_date"
                       value="{{ isset($bank->last_trns_date) ? $bank->last_trns_date : ''}}">

                {!! $errors->first('last_trns_date', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group {{ $errors->has('last_trns_value') ? 'has-error' : ''}}">
                <label for="last_trns_value"
                       class="">{{ __('organization::app.bank.fields.last_trns_value') }}</label>

                <input class="control" name="last_trns_value" type="number" id="last_trns_value"
                       value="{{ isset($bank->last_trns_value) ? $bank->last_trns_value : ''}}">

                {!! $errors->first('last_trns_value', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('last_trns_type') ? 'has-error' : ''}}">
                <label for="last_trns_type" class="">{{ __('organization::app.bank.fields.last_trns_type') }}</label>

                <input class="control" name="last_trns_type" type="text" id="last_trns_type"
                       value="{{ isset($bank->last_trns_type) ? $bank->last_trns_type : ''}}">

                {!! $errors->first('last_trns_type', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group {{ $errors->has('begin_bal_credit_fc') ? 'has-error' : ''}}">
                <label for="begin_bal_credit_fc"
                       class="">{{ __('organization::app.bank.fields.begin_bal_credit_fc') }}</label>

                <input class="control" name="begin_bal_credit_fc" type="number" id="begin_bal_credit_fc"
                       value="{{ isset($bank->begin_bal_credit_fc) ? $bank->begin_bal_credit_fc : ''}}">

                {!! $errors->first('begin_bal_credit_fc', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('begin_bal_debit_fc') ? 'has-error' : ''}}">
                <label for="begin_bal_debit_fc"
                       class="">{{ __('organization::app.bank.fields.begin_bal_debit_fc') }}</label>

                <input class="control" name="begin_bal_debit_fc" type="number" id="begin_bal_debit_fc"
                       value="{{ isset($bank->begin_bal_debit_fc) ? $bank->begin_bal_debit_fc : ''}}">

                {!! $errors->first('begin_bal_debit_fc', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group {{ $errors->has('curr_bal_credit_fc') ? 'has-error' : ''}}">
                <label for="curr_bal_credit_fc"
                       class="">{{ __('organization::app.bank.fields.curr_bal_credit_fc') }}</label>

                <input class="control" name="curr_bal_credit_fc" type="number" id="curr_bal_credit_fc"
                       value="{{ isset($bank->curr_bal_credit_fc) ? $bank->curr_bal_credit_fc : ''}}">

                {!! $errors->first('curr_bal_credit_fc', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('curr_bal_debit_fc') ? 'has-error' : ''}}">
                <label for="curr_bal_debit_fc"
                       class="">{{ __('organization::app.bank.fields.curr_bal_debit_fc') }}</label>

                <input class="control" name="curr_bal_debit_fc" type="number" id="curr_bal_debit_fc"
                       value="{{ isset($bank->curr_bal_debit_fc) ? $bank->curr_bal_debit_fc : ''}}">

                {!! $errors->first('curr_bal_debit_fc', '<span class="control-error">:message</span>') !!}
            </div>
        </div>

        <div class="row">
            <div class="control-group {{ $errors->has('analysis_code') ? 'has-error' : ''}}">
                <label for="analysis_code" class="">{{ __('organization::app.bank.fields.analysis_code') }}</label>

                <input class="control" name="analysis_code" type="text" id="analysis_code"
                       value="{{ isset($bank->analysis_code) ? $bank->analysis_code : ''}}">

                {!! $errors->first('analysis_code', '<span class="control-error">:message</span>') !!}
            </div>

        </div>

    </div>
</accordian>
