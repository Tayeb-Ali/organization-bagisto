<accordian :title="'{{ __('organization::app.supplier.general') }}'" :active="true">
    <div slot="body">


        <div class="row">
            <div class="control-group col-6 {{ $errors->has('name') ? 'has-error' : ''}}">
                <label for="name" class="required">{{ __('organization::app.supplier.fields.name') }}</label>

                <input class="control" name="name" type="text" id="name"
                       value="{{ isset($supplier->name) ? $supplier->name : ''}}" required>

                {!! $errors->first('name', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col-6 {{ $errors->has('supp_type') ? 'has-error' : ''}}">
                <label for="supp_type" class="">{{ __('organization::app.supplier.fields.supp_type') }}</label>

                <input class="control" name="supp_type" type="text" id="supp_type"
                       value="{{ isset($supplier->supp_type) ? $supplier->supp_type : ''}}">

                {!! $errors->first('supp_type', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col-6 {{ $errors->has('company_id') ? 'has-error' : ''}}">
                <label for="company_id"
                       class="required">{{ __('organization::app.supplier.fields.company_id') }}</label>

                <select id="company_id" name="company_id" class="form-control control" data-role="control">
                    @foreach($company as $item)
                        <option value="{{ $item->company_id }}" {{$supplier->company_id == $item->company_id ? 'selected' : '' }}>{{ $item->description }}</option>
                    @endforeach
                </select>

                {!! $errors->first('company_id', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col-6 {{ $errors->has('group_id') ? 'has-error' : ''}}">
                <label for="company_id" class="required">{{ __('organization::app.supplier.fields.group_id') }}</label>

                <select id="group_id" name="group_id" class="form-control control" data-role="control">
                    @foreach($group as $item)
                        <option value="{{ $item->group_id }}" {{$supplier->group_id == $item->group_id ? 'selected' : '' }}>{{ $item->group_desc }}</option>
                    @endforeach
                </select>

                {!! $errors->first('company_id', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col-6 {{ $errors->has('contact_person') ? 'has-error' : ''}}">
                <label for="contact_person"
                       class="">{{ __('organization::app.supplier.fields.contact_person') }}</label>

                <input class="control" name="contact_person" type="text" id="contact_person"
                       value="{{ isset($supplier->contact_person) ? $supplier->contact_person : ''}}">

                {!! $errors->first('contact_person', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col-6 {{ $errors->has('phone') ? 'has-error' : ''}}">
                <label for="phone" class="">{{ __('organization::app.supplier.fields.phone') }}</label>

                <input class="control" name="phone" type="text" id="phone"
                       value="{{ isset($supplier->phone) ? $supplier->phone : ''}}">

                {!! $errors->first('phone', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col-6 {{ $errors->has('fax') ? 'has-error' : ''}}">
                <label for="fax" class="">{{ __('organization::app.supplier.fields.fax') }}</label>

                <input class="control" name="fax" type="text" id="fax"
                       value="{{ isset($supplier->fax) ? $supplier->fax : ''}}">

                {!! $errors->first('fax', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col-6 {{ $errors->has('pobox') ? 'has-error' : ''}}">
                <label for="pobox" class="">{{ __('organization::app.supplier.fields.pobox') }}</label>

                <input class="control" name="pobox" type="text" id="pobox"
                       value="{{ isset($supplier->pobox) ? $supplier->pobox : ''}}">

                {!! $errors->first('pobox', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col-6 {{ $errors->has('email') ? 'has-error' : ''}}">
                <label for="email" class="">{{ __('organization::app.supplier.fields.email') }}</label>

                <input class="control" name="email" type="text" id="email"
                       value="{{ isset($supplier->email) ? $supplier->email : ''}}">

                {!! $errors->first('email', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col-6 {{ $errors->has('country') ? 'has-error' : ''}}">
                <label for="country" class="">{{ __('organization::app.supplier.fields.country') }}</label>

                <input class="control" name="country" type="text" id="country"
                       value="{{ isset($supplier->country) ? $supplier->country : ''}}">

                {!! $errors->first('country', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col-6 {{ $errors->has('city') ? 'has-error' : ''}}">
                <label for="city" class="">{{ __('organization::app.supplier.fields.city') }}</label>

                <input class="control" name="city" type="text" id="city"
                       value="{{ isset($supplier->city) ? $supplier->city : ''}}">

                {!! $errors->first('city', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col-6 {{ $errors->has('address') ? 'has-error' : ''}}">
                <label for="address" class="">{{ __('organization::app.supplier.fields.address') }}</label>

                <input class="control" name="address" type="text" id="address"
                       value="{{ isset($supplier->address) ? $supplier->address : ''}}">

                {!! $errors->first('address', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col-6 {{ $errors->has('have_branch') ? 'has-error' : ''}}">
                <label for="have_branch" class="">{{ __('organization::app.supplier.fields.have_branch') }}</label>

                <input class="control" name="have_branch" type="text" id="have_branch"
                       value="{{ isset($supplier->have_branch) ? $supplier->have_branch : ''}}">

                {!! $errors->first('have_branch', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col-6 {{ $errors->has('status') ? 'has-error' : ''}}">
                <label for="status" class="">{{ __('organization::app.supplier.fields.status') }}</label>

                <input class="control" name="status" type="text" id="status"
                       value="{{ isset($supplier->status) ? $supplier->status : ''}}">

                {!! $errors->first('status', '<span class="control-error">:message</span>') !!}
            </div>
        </div>

        <div class="row">
            <div class="control-group col-6 {{ $errors->has('credit_limit') ? 'has-error' : ''}}">
                <label for="credit_limit" class="">{{ __('organization::app.supplier.fields.credit_limit') }}</label>

                <input class="control" name="credit_limit" type="number" id="credit_limit"
                       value="{{ isset($supplier->credit_limit) ? $supplier->credit_limit : ''}}">

                {!! $errors->first('credit_limit', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col-6 {{ $errors->has('begin_bal_credit') ? 'has-error' : ''}}">
                <label for="begin_bal_credit"
                       class="">{{ __('organization::app.supplier.fields.begin_bal_credit') }}</label>

                <input class="control" name="begin_bal_credit" type="number" id="begin_bal_credit"
                       value="{{ isset($supplier->begin_bal_credit) ? $supplier->begin_bal_credit : ''}}">

                {!! $errors->first('begin_bal_credit', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col-6 {{ $errors->has('begin_bal_debit') ? 'has-error' : ''}}">
                <label for="begin_bal_debit"
                       class="">{{ __('organization::app.supplier.fields.begin_bal_debit') }}</label>

                <input class="control" name="begin_bal_debit" type="number" id="begin_bal_debit"
                       value="{{ isset($supplier->begin_bal_debit) ? $supplier->begin_bal_debit : ''}}">

                {!! $errors->first('begin_bal_debit', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col-6 {{ $errors->has('curr_bal_credit') ? 'has-error' : ''}}">
                <label for="curr_bal_credit"
                       class="">{{ __('organization::app.supplier.fields.curr_bal_credit') }}</label>

                <input class="control" name="curr_bal_credit" type="number" id="curr_bal_credit"
                       value="{{ isset($supplier->curr_bal_credit) ? $supplier->curr_bal_credit : ''}}">

                {!! $errors->first('curr_bal_credit', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col-6 {{ $errors->has('curr_bal_debit') ? 'has-error' : ''}}">
                <label for="curr_bal_debit"
                       class="">{{ __('organization::app.supplier.fields.curr_bal_debit') }}</label>

                <input class="control" name="curr_bal_debit" type="number" id="curr_bal_debit"
                       value="{{ isset($supplier->curr_bal_debit) ? $supplier->curr_bal_debit : ''}}">

                {!! $errors->first('curr_bal_debit', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col-6 {{ $errors->has('amend_by') ? 'has-error' : ''}}">
                <label for="amend_by" class="">{{ __('organization::app.supplier.fields.amend_by') }}</label>

                <input class="control" name="amend_by" type="text" id="amend_by"
                       value="{{ isset($supplier->amend_by) ? $supplier->amend_by : ''}}">

                {!! $errors->first('amend_by', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col-6 {{ $errors->has('amend_date') ? 'has-error' : ''}}">
                <label for="amend_date" class="">{{ __('organization::app.supplier.fields.amend_date') }}</label>

                <input class="control" name="amend_date" type="datetime-local" id="amend_date"
                       value="{{ isset($supplier->amend_date) ? $supplier->amend_date : ''}}">

                {!! $errors->first('amend_date', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col-6 {{ $errors->has('account_code') ? 'has-error' : ''}}">
                <label for="account_code" class="">{{ __('organization::app.supplier.fields.account_code') }}</label>

                <input class="control" name="account_code" type="text" id="account_code"
                       value="{{ isset($supplier->account_code) ? $supplier->account_code : ''}}">

                {!! $errors->first('account_code', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col-6 {{ $errors->has('last_trns_date') ? 'has-error' : ''}}">
                <label for="last_trns_date"
                       class="">{{ __('organization::app.supplier.fields.last_trns_date') }}</label>

                <input class="control" name="last_trns_date" type="datetime-local" id="last_trns_date"
                       value="{{ isset($supplier->last_trns_date) ? $supplier->last_trns_date : ''}}">

                {!! $errors->first('last_trns_date', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col-6 {{ $errors->has('last_trns_value') ? 'has-error' : ''}}">
                <label for="last_trns_value"
                       class="">{{ __('organization::app.supplier.fields.last_trns_value') }}</label>

                <input class="control" name="last_trns_value" type="number" id="last_trns_value"
                       value="{{ isset($supplier->last_trns_value) ? $supplier->last_trns_value : ''}}">

                {!! $errors->first('last_trns_value', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col-6 {{ $errors->has('last_trns_type') ? 'has-error' : ''}}">
                <label for="last_trns_type"
                       class="">{{ __('organization::app.supplier.fields.last_trns_type') }}</label>

                <input class="control" name="last_trns_type" type="text" id="last_trns_type"
                       value="{{ isset($supplier->last_trns_type) ? $supplier->last_trns_type : ''}}">

                {!! $errors->first('last_trns_type', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col-6 {{ $errors->has('currency_code') ? 'has-error' : ''}}">
                <label for="currency_code" class="">{{ __('organization::app.supplier.fields.currency_code') }}</label>

                <input class="control" name="currency_code" type="text" id="currency_code"
                       value="{{ isset($supplier->currency_code) ? $supplier->currency_code : ''}}">

                {!! $errors->first('currency_code', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col-6 {{ $errors->has('zip_code') ? 'has-error' : ''}}">
                <label for="zip_code" class="">{{ __('organization::app.supplier.fields.zip_code') }}</label>

                <input class="control" name="zip_code" type="text" id="zip_code"
                       value="{{ isset($supplier->zip_code) ? $supplier->zip_code : ''}}">

                {!! $errors->first('zip_code', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col-6 {{ $errors->has('begin_bal_credit_fc') ? 'has-error' : ''}}">
                <label for="begin_bal_credit_fc"
                       class="">{{ __('organization::app.supplier.fields.begin_bal_credit_fc') }}</label>

                <input class="control" name="begin_bal_credit_fc" type="number" id="begin_bal_credit_fc"
                       value="{{ isset($supplier->begin_bal_credit_fc) ? $supplier->begin_bal_credit_fc : ''}}">

                {!! $errors->first('begin_bal_credit_fc', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col-6 {{ $errors->has('begin_bal_debit_fc') ? 'has-error' : ''}}">
                <label for="begin_bal_debit_fc"
                       class="">{{ __('organization::app.supplier.fields.begin_bal_debit_fc') }}</label>

                <input class="control" name="begin_bal_debit_fc" type="number" id="begin_bal_debit_fc"
                       value="{{ isset($supplier->begin_bal_debit_fc) ? $supplier->begin_bal_debit_fc : ''}}">

                {!! $errors->first('begin_bal_debit_fc', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col-6 {{ $errors->has('curr_bal_credit_fc') ? 'has-error' : ''}}">
                <label for="curr_bal_credit_fc"
                       class="">{{ __('organization::app.supplier.fields.curr_bal_credit_fc') }}</label>

                <input class="control" name="curr_bal_credit_fc" type="number" id="curr_bal_credit_fc"
                       value="{{ isset($supplier->curr_bal_credit_fc) ? $supplier->curr_bal_credit_fc : ''}}">

                {!! $errors->first('curr_bal_credit_fc', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col-6 {{ $errors->has('curr_bal_debit_fc') ? 'has-error' : ''}}">
                <label for="curr_bal_debit_fc"
                       class="">{{ __('organization::app.supplier.fields.curr_bal_debit_fc') }}</label>

                <input class="control" name="curr_bal_debit_fc" type="number" id="curr_bal_debit_fc"
                       value="{{ isset($supplier->curr_bal_debit_fc) ? $supplier->curr_bal_debit_fc : ''}}">

                {!! $errors->first('curr_bal_debit_fc', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="control-group col-6 {{ $errors->has('allowance_days') ? 'has-error' : ''}}">
            <label for="allowance_days"
                   class="">{{ __('organization::app.supplier.fields.allowance_days') }}</label>

            <input class="control" name="allowance_days" type="number" id="allowance_days"
                   value="{{ isset($supplier->allowance_days) ? $supplier->allowance_days : ''}}">

            {!! $errors->first('allowance_days', '<span class="control-error">:message</span>') !!}
        </div>
        <div class="control-group col-6 {{ $errors->has('analysis_code') ? 'has-error' : ''}}">
            <label for="analysis_code" class="">{{ __('organization::app.supplier.fields.analysis_code') }}</label>

            <input class="control" name="analysis_code" type="text" id="analysis_code"
                   value="{{ isset($supplier->analysis_code) ? $supplier->analysis_code : ''}}">

            {!! $errors->first('analysis_code', '<span class="control-error">:message</span>') !!}
        </div>
        <div class="control-group col-6 {{ $errors->has('active_flag') ? 'has-error' : ''}}">
            <label for="active_flag" class="">{{ __('organization::app.supplier.fields.active_flag') }}</label>

            <input class="control" name="active_flag" type="text" id="active_flag"
                   value="{{ isset($supplier->active_flag) ? $supplier->active_flag : ''}}">

            {!! $errors->first('active_flag', '<span class="control-error">:message</span>') !!}
        </div>
        <div class="control-group col-6 {{ $errors->has('vat_flag') ? 'has-error' : ''}}">
            <label for="vat_flag" class="">{{ __('organization::app.supplier.fields.vat_flag') }}</label>

            <input class="control" name="vat_flag" type="number" id="vat_flag"
                   value="{{ isset($supplier->vat_flag) ? $supplier->vat_flag : ''}}">

            {!! $errors->first('vat_flag', '<span class="control-error">:message</span>') !!}
        </div>
        <div class="control-group col-6 {{ $errors->has('mship_to_address') ? 'has-error' : ''}}">
            <label for="mship_to_address"
                   class="">{{ __('organization::app.supplier.fields.mship_to_address') }}</label>

            <input class="control" name="mship_to_address" type="text" id="mship_to_address"
                   value="{{ isset($supplier->mship_to_address) ? $supplier->mship_to_address : ''}}">

            {!! $errors->first('mship_to_address', '<span class="control-error">:message</span>') !!}
        </div>
        <div class="control-group col-6 {{ $errors->has('mship_to_phone') ? 'has-error' : ''}}">
            <label for="mship_to_phone"
                   class="">{{ __('organization::app.supplier.fields.mship_to_phone') }}</label>

            <input class="control" name="mship_to_phone" type="text" id="mship_to_phone"
                   value="{{ isset($supplier->mship_to_phone) ? $supplier->mship_to_phone : ''}}">

            {!! $errors->first('mship_to_phone', '<span class="control-error">:message</span>') !!}
        </div>
        <div class="control-group col-6 {{ $errors->has('mship_to_fax') ? 'has-error' : ''}}">
            <label for="mship_to_fax" class="">{{ __('organization::app.supplier.fields.mship_to_fax') }}</label>

            <input class="control" name="mship_to_fax" type="text" id="mship_to_fax"
                   value="{{ isset($supplier->mship_to_fax) ? $supplier->mship_to_fax : ''}}">

            {!! $errors->first('mship_to_fax', '<span class="control-error">:message</span>') !!}
        </div>
        <div class="control-group col-6 {{ $errors->has('mship_to_city') ? 'has-error' : ''}}">
            <label for="mship_to_city" class="">{{ __('organization::app.supplier.fields.mship_to_city') }}</label>

            <input class="control" name="mship_to_city" type="text" id="mship_to_city"
                   value="{{ isset($supplier->mship_to_city) ? $supplier->mship_to_city : ''}}">

            {!! $errors->first('mship_to_city', '<span class="control-error">:message</span>') !!}
        </div>
        <div class="control-group col-6 {{ $errors->has('mship_to_pobox') ? 'has-error' : ''}}">
            <label for="mship_to_pobox"
                   class="">{{ __('organization::app.supplier.fields.mship_to_pobox') }}</label>

            <input class="control" name="mship_to_pobox" type="text" id="mship_to_pobox"
                   value="{{ isset($supplier->mship_to_pobox) ? $supplier->mship_to_pobox : ''}}">

            {!! $errors->first('mship_to_pobox', '<span class="control-error">:message</span>') !!}
        </div>
        <div class="control-group col-6 {{ $errors->has('billing_contact_person') ? 'has-error' : ''}}">
            <label for="billing_contact_person"
                   class="">{{ __('organization::app.supplier.fields.billing_contact_person') }}</label>

            <input class="control" name="billing_contact_person" type="text" id="billing_contact_person"
                   value="{{ isset($supplier->billing_contact_person) ? $supplier->billing_contact_person : ''}}">

            {!! $errors->first('billing_contact_person', '<span class="control-error">:message</span>') !!}
        </div>


    </div>
</accordian>
