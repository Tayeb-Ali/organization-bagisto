<accordian :title="'{{ __('organization::app.employ.general') }}'" :active="true">
    <div slot="body">

        <div class="row">
            <div class="control-group {{ $errors->has('name') ? 'has-error' : ''}}">
                <label for="name" class="required">{{ __('organization::app.employ.fields.name') }}</label>

                <input class="control" name="name" type="text" id="name"
                       value="{{ isset($employ->name) ? $employ->name : ''}}" required>

                {!! $errors->first('name', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('cust_type') ? 'has-error' : ''}}">
                <label for="cust_type" class="">{{ __('organization::app.employ.fields.cust_type') }}</label>

                <input class="control" name="cust_type" type="text" id="cust_type"
                       value="{{ isset($employ->cust_type) ? $employ->cust_type : ''}}">

                {!! $errors->first('cust_type', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            @include('organization::admin.helper.company-dropdown')
            <div class="control-group {{ $errors->has('group_id') ? 'has-error' : ''}}">
                <label for="company_id" class="required">{{ __('organization::app.employ.fields.group_id') }}</label>

                <select id="group_id" name="group_id" class="form-control" data-role="control">

                    @foreach($group as $item)
                        <option value="{{ $item->group_id }}" {{$employ->group_id == $item->group_id ? 'selected' : '' }}>{{ $item->group_desc }}</option>
                    @endforeach
                </select>
                {!! $errors->first('group_id', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group {{ $errors->has('contact_person') ? 'has-error' : ''}}">
                <label for="contact_person" class="">{{ __('organization::app.employ.fields.contact_person') }}</label>

                <input class="control" name="contact_person" type="text" id="contact_person"
                       value="{{ isset($employ->contact_person) ? $employ->contact_person : ''}}">

                {!! $errors->first('contact_person', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('phone') ? 'has-error' : ''}}">
                <label for="phone" class="">{{ __('organization::app.employ.fields.phone') }}</label>

                <input class="control" name="phone" type="text" id="phone"
                       value="{{ isset($employ->phone) ? $employ->phone : ''}}">

                {!! $errors->first('phone', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group {{ $errors->has('fax') ? 'has-error' : ''}}">
                <label for="fax" class="">{{ __('organization::app.employ.fields.fax') }}</label>

                <input class="control" name="fax" type="text" id="fax"
                       value="{{ isset($employ->fax) ? $employ->fax : ''}}">

                {!! $errors->first('fax', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('pobox') ? 'has-error' : ''}}">
                <label for="pobox" class="">{{ __('organization::app.employ.fields.pobox') }}</label>

                <input class="control" name="pobox" type="text" id="pobox"
                       value="{{ isset($employ->pobox) ? $employ->pobox : ''}}">

                {!! $errors->first('pobox', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group {{ $errors->has('email') ? 'has-error' : ''}}">
                <label for="email" class="">{{ __('organization::app.employ.fields.email') }}</label>

                <input class="control" name="email" type="text" id="email"
                       value="{{ isset($employ->email) ? $employ->email : ''}}">

                {!! $errors->first('email', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('country') ? 'has-error' : ''}}">
                <label for="country" class="">{{ __('organization::app.employ.fields.country') }}</label>

                <input class="control" name="country" type="text" id="country"
                       value="{{ isset($employ->country) ? $employ->country : ''}}">

                {!! $errors->first('country', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group {{ $errors->has('city') ? 'has-error' : ''}}">
                <label for="city" class="">{{ __('organization::app.employ.fields.city') }}</label>

                <input class="control" name="city" type="text" id="city"
                       value="{{ isset($employ->city) ? $employ->city : ''}}">

                {!! $errors->first('city', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('address') ? 'has-error' : ''}}">
                <label for="address" class="">{{ __('organization::app.employ.fields.address') }}</label>

                <input class="control" name="address" type="text" id="address"
                       value="{{ isset($employ->address) ? $employ->address : ''}}">

                {!! $errors->first('address', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group {{ $errors->has('have_branch') ? 'has-error' : ''}}">
                <label for="have_branch" class="">{{ __('organization::app.employ.fields.have_branch') }}</label>

                <input class="control" name="have_branch" type="text" id="have_branch"
                       value="{{ isset($employ->have_branch) ? $employ->have_branch : ''}}">

                {!! $errors->first('have_branch', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('status') ? 'has-error' : ''}}">
                <label for="status" class="">{{ __('organization::app.employ.fields.status') }}</label>

                <input class="control" name="status" type="text" id="status"
                       value="{{ isset($employ->status) ? $employ->status : ''}}">

                {!! $errors->first('status', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group {{ $errors->has('credit_limit') ? 'has-error' : ''}}">
                <label for="credit_limit" class="">{{ __('organization::app.employ.fields.credit_limit') }}</label>

                <input class="control" name="credit_limit" type="number" id="credit_limit"
                       value="{{ isset($employ->credit_limit) ? $employ->credit_limit : ''}}">

                {!! $errors->first('credit_limit', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('begin_bal_credit') ? 'has-error' : ''}}">
                <label for="begin_bal_credit"
                       class="">{{ __('organization::app.employ.fields.begin_bal_credit') }}</label>

                <input class="control" name="begin_bal_credit" type="number" id="begin_bal_credit"
                       value="{{ isset($employ->begin_bal_credit) ? $employ->begin_bal_credit : ''}}">

                {!! $errors->first('begin_bal_credit', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group {{ $errors->has('begin_bal_debit') ? 'has-error' : ''}}">
                <label for="begin_bal_debit"
                       class="">{{ __('organization::app.employ.fields.begin_bal_debit') }}</label>

                <input class="control" name="begin_bal_debit" type="number" id="begin_bal_debit"
                       value="{{ isset($employ->begin_bal_debit) ? $employ->begin_bal_debit : ''}}">

                {!! $errors->first('begin_bal_debit', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('curr_bal_credit') ? 'has-error' : ''}}">
                <label for="curr_bal_credit"
                       class="">{{ __('organization::app.employ.fields.curr_bal_credit') }}</label>

                <input class="control" name="curr_bal_credit" type="number" id="curr_bal_credit"
                       value="{{ isset($employ->curr_bal_credit) ? $employ->curr_bal_credit : ''}}">

                {!! $errors->first('curr_bal_credit', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group {{ $errors->has('curr_bal_debit') ? 'has-error' : ''}}">
                <label for="curr_bal_debit" class="">{{ __('organization::app.employ.fields.curr_bal_debit') }}</label>

                <input class="control" name="curr_bal_debit" type="number" id="curr_bal_debit"
                       value="{{ isset($employ->curr_bal_debit) ? $employ->curr_bal_debit : ''}}">

                {!! $errors->first('curr_bal_debit', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('amend_by') ? 'has-error' : ''}}">
                <label for="amend_by" class="">{{ __('organization::app.employ.fields.amend_by') }}</label>

                <input class="control" name="amend_by" type="text" id="amend_by"
                       value="{{ isset($employ->amend_by) ? $employ->amend_by : ''}}">

                {!! $errors->first('amend_by', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group {{ $errors->has('amend_date') ? 'has-error' : ''}}">
                <label for="amend_date" class="">{{ __('organization::app.employ.fields.amend_date') }}</label>

                <input class="control" name="amend_date" type="datetime-local" id="amend_date"
                       value="{{ isset($employ->amend_date) ? $employ->amend_date : ''}}">

                {!! $errors->first('amend_date', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('acc_mgr') ? 'has-error' : ''}}">
                <label for="acc_mgr" class="">{{ __('organization::app.employ.fields.acc_mgr') }}</label>

                <input class="control" name="acc_mgr" type="text" id="acc_mgr"
                       value="{{ isset($employ->acc_mgr) ? $employ->acc_mgr : ''}}">

                {!! $errors->first('acc_mgr', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group {{ $errors->has('account_code') ? 'has-error' : ''}}">
                <label for="account_code" class="">{{ __('organization::app.employ.fields.account_code') }}</label>

                <input class="control" name="account_code" type="text" id="account_code"
                       value="{{ isset($employ->account_code) ? $employ->account_code : ''}}">

                {!! $errors->first('account_code', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('last_trns_date') ? 'has-error' : ''}}">
                <label for="last_trns_date" class="">{{ __('organization::app.employ.fields.last_trns_date') }}</label>

                <input class="control" name="last_trns_date" type="datetime-local" id="last_trns_date"
                       value="{{ isset($employ->last_trns_date) ? $employ->last_trns_date : ''}}">

                {!! $errors->first('last_trns_date', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group {{ $errors->has('last_trns_value') ? 'has-error' : ''}}">
                <label for="last_trns_value"
                       class="">{{ __('organization::app.employ.fields.last_trns_value') }}</label>

                <input class="control" name="last_trns_value" type="number" id="last_trns_value"
                       value="{{ isset($employ->last_trns_value) ? $employ->last_trns_value : ''}}">

                {!! $errors->first('last_trns_value', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('last_trns_type') ? 'has-error' : ''}}">
                <label for="last_trns_type" class="">{{ __('organization::app.employ.fields.last_trns_type') }}</label>

                <input class="control" name="last_trns_type" type="text" id="last_trns_type"
                       value="{{ isset($employ->last_trns_type) ? $employ->last_trns_type : ''}}">

                {!! $errors->first('last_trns_type', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group {{ $errors->has('begin_bal_credit_fc') ? 'has-error' : ''}}">
                <label for="begin_bal_credit_fc"
                       class="">{{ __('organization::app.employ.fields.begin_bal_credit_fc') }}</label>

                <input class="control" name="begin_bal_credit_fc" type="number" id="begin_bal_credit_fc"
                       value="{{ isset($employ->begin_bal_credit_fc) ? $employ->begin_bal_credit_fc : ''}}">

                {!! $errors->first('begin_bal_credit_fc', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('begin_bal_debit_fc') ? 'has-error' : ''}}">
                <label for="begin_bal_debit_fc"
                       class="">{{ __('organization::app.employ.fields.begin_bal_debit_fc') }}</label>

                <input class="control" name="begin_bal_debit_fc" type="number" id="begin_bal_debit_fc"
                       value="{{ isset($employ->begin_bal_debit_fc) ? $employ->begin_bal_debit_fc : ''}}">

                {!! $errors->first('begin_bal_debit_fc', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group {{ $errors->has('curr_bal_credit_fc') ? 'has-error' : ''}}">
                <label for="curr_bal_credit_fc"
                       class="">{{ __('organization::app.employ.fields.curr_bal_credit_fc') }}</label>

                <input class="control" name="curr_bal_credit_fc" type="number" id="curr_bal_credit_fc"
                       value="{{ isset($employ->curr_bal_credit_fc) ? $employ->curr_bal_credit_fc : ''}}">

                {!! $errors->first('curr_bal_credit_fc', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('curr_bal_debit_fc') ? 'has-error' : ''}}">
                <label for="curr_bal_debit_fc"
                       class="">{{ __('organization::app.employ.fields.curr_bal_debit_fc') }}</label>

                <input class="control" name="curr_bal_debit_fc" type="number" id="curr_bal_debit_fc"
                       value="{{ isset($employ->curr_bal_debit_fc) ? $employ->curr_bal_debit_fc : ''}}">

                {!! $errors->first('curr_bal_debit_fc', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group {{ $errors->has('currency_code') ? 'has-error' : ''}}">
                <label for="currency_code" class="">{{ __('organization::app.employ.fields.currency_code') }}</label>

                <input class="control" name="currency_code" type="text" id="currency_code"
                       value="{{ isset($employ->currency_code) ? $employ->currency_code : ''}}">

                {!! $errors->first('currency_code', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('allowance_days') ? 'has-error' : ''}}">
                <label for="allowance_days" class="">{{ __('organization::app.employ.fields.allowance_days') }}</label>

                <input class="control" name="allowance_days" type="number" id="allowance_days"
                       value="{{ isset($employ->allowance_days) ? $employ->allowance_days : ''}}">

                {!! $errors->first('allowance_days', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group {{ $errors->has('mship_to_address') ? 'has-error' : ''}}">
                <label for="mship_to_address"
                       class="">{{ __('organization::app.employ.fields.mship_to_address') }}</label>

                <input class="control" name="mship_to_address" type="text" id="mship_to_address"
                       value="{{ isset($employ->mship_to_address) ? $employ->mship_to_address : ''}}">

                {!! $errors->first('mship_to_address', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('mship_to_phone') ? 'has-error' : ''}}">
                <label for="mship_to_phone" class="">{{ __('organization::app.employ.fields.mship_to_phone') }}</label>

                <input class="control" name="mship_to_phone" type="text" id="mship_to_phone"
                       value="{{ isset($employ->mship_to_phone) ? $employ->mship_to_phone : ''}}">

                {!! $errors->first('mship_to_phone', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group {{ $errors->has('mship_to_fax') ? 'has-error' : ''}}">
                <label for="mship_to_fax" class="">{{ __('organization::app.employ.fields.mship_to_fax') }}</label>

                <input class="control" name="mship_to_fax" type="text" id="mship_to_fax"
                       value="{{ isset($employ->mship_to_fax) ? $employ->mship_to_fax : ''}}">

                {!! $errors->first('mship_to_fax', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('mship_to_city') ? 'has-error' : ''}}">
                <label for="mship_to_city" class="">{{ __('organization::app.employ.fields.mship_to_city') }}</label>

                <input class="control" name="mship_to_city" type="text" id="mship_to_city"
                       value="{{ isset($employ->mship_to_city) ? $employ->mship_to_city : ''}}">

                {!! $errors->first('mship_to_city', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group {{ $errors->has('mship_to_pobox') ? 'has-error' : ''}}">
                <label for="mship_to_pobox" class="">{{ __('organization::app.employ.fields.mship_to_pobox') }}</label>

                <input class="control" name="mship_to_pobox" type="text" id="mship_to_pobox"
                       value="{{ isset($employ->mship_to_pobox) ? $employ->mship_to_pobox : ''}}">

                {!! $errors->first('mship_to_pobox', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('online_cust') ? 'has-error' : ''}}">
                <label for="online_cust" class="">{{ __('organization::app.employ.fields.online_cust') }}</label>

                <input class="control" name="online_cust" type="text" id="online_cust"
                       value="{{ isset($employ->online_cust) ? $employ->online_cust : ''}}">

                {!! $errors->first('online_cust', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group {{ $errors->has('analysis_code') ? 'has-error' : ''}}">
                <label for="analysis_code" class="">{{ __('organization::app.employ.fields.analysis_code') }}</label>

                <input class="control" name="analysis_code" type="text" id="analysis_code"
                       value="{{ isset($employ->analysis_code) ? $employ->analysis_code : ''}}">

                {!! $errors->first('analysis_code', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('sprice_list') ? 'has-error' : ''}}">
                <label for="sprice_list" class="">{{ __('organization::app.employ.fields.sprice_list') }}</label>

                <input class="control" name="sprice_list" type="text" id="sprice_list"
                       value="{{ isset($employ->sprice_list) ? $employ->sprice_list : ''}}">

                {!! $errors->first('sprice_list', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group {{ $errors->has('vat_flag') ? 'has-error' : ''}}">
                <label for="vat_flag" class="">{{ __('organization::app.employ.fields.vat_flag') }}</label>

                <input class="control" name="vat_flag" type="number" id="vat_flag"
                       value="{{ isset($employ->vat_flag) ? $employ->vat_flag : ''}}">

                {!! $errors->first('vat_flag', '<span class="control-error">:message</span>') !!}
            </div>

        </div>
    </div>
</accordian>
