<accordian :title="'{{ __('organization::app.store.general') }}'" :active="true">
    <div slot="body">
        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('company_id') ? 'has-error' : ''}}">
                <label for="company_id" class="required">{{ __('organization::app.store.fields.company_id') }}</label>

                <select id="company_id" name="company_id" class="form-control control" data-role="control">

                    @foreach($company as $item)
                        <option value="{{ $item->company_id }}" {{$store->company_id == $item->company_id ? 'selected' : '' }}>{{ $item->description }}</option>
                    @endforeach
                </select>
                {!! $errors->first('company_id', '<span class="control-error">:message</span>') !!}
            </div>


            <div class="control-group col col-6 {{ $errors->has('status') ? 'has-error' : ''}}">
                <label for="status" class="required">{{ __('organization::app.store.fields.status') }}</label>

                <select id="status" name="status" class="form-control control" data-role="control">

                    <option value="1" {{$store->status == 1 ? 'selected' : '' }}>{{__('organization::app.status.Active')}}</option>
                    <option value="2" {{$store->status ==2 ? 'selected' : '' }}>{{__('organization::app.status.Inactive')}}</option>
                </select>
                {!! $errors->first('status', '<span class="control-error">:message</span>') !!}
            </div>
        </div>

        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('description') ? 'has-error' : ''}}">
                <label for="description" class="required">{{ __('organization::app.store.fields.description') }}</label>

                <input class="control" name="description" type="text" id="description"
                       value="{{ isset($store->description) ? $store->description : ''}}" required>

                {!! $errors->first('description', '<span class="control-error">:message</span>') !!}
            </div>

            <div class="control-group col col-6{{ $errors->has('code') ? 'has-error' : ''}}">
                <label for="code" class="required">{{ __('organization::app.store.fields.code') }}</label>

                <input class="control" name="code" type="text" id="code"
                       value="{{ isset($store->code) ? $store->code : ''}}" required>

                {!! $errors->first('code', '<span class="control-error">:message</span>') !!}
            </div>

        </div>
        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('store_keeper') ? 'has-error' : ''}}">
                <label for="store_keeper" class="">{{ __('organization::app.store.fields.store_keeper') }}</label>

                <input class="control" name="store_keeper" type="text" id="store_keeper"
                       value="{{ isset($store->store_keeper) ? $store->store_keeper : ''}}">

                {!! $errors->first('store_keeper', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('account_code') ? 'has-error' : ''}}">
                <label for="account_code" class="">{{ __('organization::app.store.fields.account_code') }}</label>

                <input class="control" name="account_code" type="text" id="account_code"
                       value="{{ isset($store->account_code) ? $store->account_code : ''}}">

                {!! $errors->first('account_code', '<span class="control-error">:message</span>') !!}

            </div>
        </div>
        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('store_contacts') ? 'has-error' : ''}}">
                <label for="store_contacts" class="">{{ __('organization::app.store.fields.store_contacts') }}</label>

                <input class="control" name="store_contacts" type="text" id="store_contacts"
                       value="{{ isset($store->store_contacts) ? $store->store_contacts : ''}}">

                {!! $errors->first('store_contacts', '<span class="control-error">:message</span>') !!}

            </div>
                <div class="control-group col col-6 {{ $errors->has('group_id') ? 'has-error' : ''}}">
                    <label for="group_id" class="required">{{ __('organization::app.store.fields.group_id') }}</label>

                    <select id="group_id" name="group_id" class="form-control control" data-role="control">

                        @foreach($group as $item)
                            <option value="{{ $item->group_id }}" {{$store->group_id == $item->group_id ? 'selected' : '' }}>
                                {{ $item->group_desc }}</option>
                        @endforeach
                    </select>
                    {!! $errors->first('group_id', '<span class="control-error">:message</span>') !!}
                </div>
{{--            <div class="control-group col col-6 {{ $errors->has('analysis_code') ? 'has-error' : ''}}">--}}
{{--                <label for="analysis_code" class="">{{ __('organization::app.store.fields.analysis_code') }}</label>--}}

{{--                <input class="control" name="analysis_code" type="text" id="analysis_code"--}}
{{--                       value="{{ isset($store->analysis_code) ? $store->analysis_code : ''}}">--}}

{{--                {!! $errors->first('analysis_code', '<span class="control-error">:message</span>') !!}--}}
{{--            </div>--}}
        </div>





        <div class="row">
            <div class="control-group form-check col col-6 {{ $errors->has('have_sub_stores') ? 'has-error' : ''}}">
                <label class="form-check-label required" for="have_sub_stores">
                    {{ __('organization::app.store.fields.have_sub_stores') }}
                    <input class="form-check-input" name="have_sub_stores" type="checkbox"
                           value="{{ isset($store->have_sub_stores) ? $store->have_sub_stores : ''}}"
                           id="have_sub_stores">
                </label>
                {!! $errors->first('have_sub_stores', '<span class="control-error">:message</span>') !!}

            </div>

            <div class="control-group form-check col col-6 {{ $errors->has('sub_store_mandatory') ? 'has-error' : ''}}">
                <label class="form-check-label required" for="sub_store_mandatory">
                    {{ __('organization::app.store.fields.sub_store_mandatory') }}
                    <input class="form-check-input" name="sub_store_mandatory" type="checkbox"
                           value="{{ isset($store->sub_store_mandatory) ? $store->sub_store_mandatory : ''}}"
                           id="sub_store_mandatory">
                </label>
                {!! $errors->first('sub_store_mandatory', '<span class="control-error">:message</span>') !!}

            </div>
        </div>
        {{--        <div class="row">--}}

        {{--
        {{--            <div class="control-group col col-6 {{ $errors->has('begin_bal_credit') ? 'has-error' : ''}}">--}}
        {{--                <label for="begin_bal_credit"--}}
        {{--                       class="">{{ __('organization::app.store.fields.begin_bal_credit') }}</label>--}}

        {{--                <input class="control" name="begin_bal_credit" type="number" id="begin_bal_credit"--}}
        {{--                       value="{{ isset($store->begin_bal_credit) ? $store->begin_bal_credit : ''}}">--}}

        {{--                {!! $errors->first('begin_bal_credit', '<span class="control-error">:message</span>') !!}--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <div class="row">--}}
        {{--            <div class="control-group col col-6 {{ $errors->has('begin_bal_debit') ? 'has-error' : ''}}">--}}
        {{--                <label for="begin_bal_debit"--}}
        {{--                       class="">{{ __('organization::app.store.fields.begin_bal_debit') }}</label>--}}

        {{--                <input class="control" name="begin_bal_debit" type="number" id="begin_bal_debit"--}}
        {{--                       value="{{ isset($store->begin_bal_debit) ? $store->begin_bal_debit : ''}}">--}}

        {{--                {!! $errors->first('begin_bal_debit', '<span class="control-error">:message</span>') !!}--}}
        {{--            </div>--}}
        {{--            <div class="control-group col col-6 {{ $errors->has('curr_bal_credit') ? 'has-error' : ''}}">--}}
        {{--                <label for="curr_bal_credit"--}}
        {{--                       class="">{{ __('organization::app.store.fields.curr_bal_credit') }}</label>--}}

        {{--                <input class="control" name="curr_bal_credit" type="number" id="curr_bal_credit"--}}
        {{--                       value="{{ isset($store->curr_bal_credit) ? $store->curr_bal_credit : ''}}">--}}

        {{--                {!! $errors->first('curr_bal_credit', '<span class="control-error">:message</span>') !!}--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <div class="row">--}}
        {{--            <div class="control-group col col-6 {{ $errors->has('curr_bal_debit') ? 'has-error' : ''}}">--}}
        {{--                <label for="curr_bal_debit"--}}
        {{--                       class="">{{ __('organization::app.store.fields.curr_bal_debit') }}</label>--}}

        {{--                <input class="control" name="curr_bal_debit" type="number" id="curr_bal_debit"--}}
        {{--                       value="{{ isset($store->curr_bal_debit) ? $store->curr_bal_debit : ''}}">--}}

        {{--                {!! $errors->first('curr_bal_debit', '<span class="control-error">:message</span>') !!}--}}
        {{--            </div>--}}
        {{--            <div class="control-group col col-6 {{ $errors->has('amend_by') ? 'has-error' : ''}}">--}}
        {{--                <label for="amend_by" class="">{{ __('organization::app.store.fields.amend_by') }}</label>--}}

        {{--                <input class="control" name="amend_by" type="text" id="amend_by"--}}
        {{--                       value="{{ isset($store->amend_by) ? $store->amend_by : ''}}">--}}

        {{--                {!! $errors->first('amend_by', '<span class="control-error">:message</span>') !!}--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <div class="row">--}}
        {{--            <div class="control-group col col-6 {{ $errors->has('amend_date') ? 'has-error' : ''}}">--}}
        {{--                <label for="amend_date" class="">{{ __('organization::app.store.fields.amend_date') }}</label>--}}

        {{--                <input class="control" name="amend_date" type="datetime-local" id="amend_date"--}}
        {{--                       value="{{ isset($store->amend_date) ? $store->amend_date : ''}}">--}}

        {{--                {!! $errors->first('amend_date', '<span class="control-error">:message</span>') !!}--}}
        {{--            </div>--}}
        {{--            <div class="control-group col col-6 {{ $errors->has('acc_mgr') ? 'has-error' : ''}}">--}}
        {{--                <label for="acc_mgr" class="">{{ __('organization::app.store.fields.acc_mgr') }}</label>--}}

        {{--                <input class="control" name="acc_mgr" type="text" id="acc_mgr"--}}
        {{--                       value="{{ isset($store->acc_mgr) ? $store->acc_mgr : ''}}">--}}

        {{--                {!! $errors->first('acc_mgr', '<span class="control-error">:message</span>') !!}--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <div class="row">--}}
        {{--        </div>--}}
        {{--        <div class="control-group col col-6 {{ $errors->has('last_trns_date') ? 'has-error' : ''}}">--}}
        {{--            <label for="last_trns_date" class="">{{ __('organization::app.store.fields.last_trns_date') }}</label>--}}

        {{--            <input class="control" name="last_trns_date" type="datetime-local" id="last_trns_date"--}}
        {{--                   value="{{ isset($store->last_trns_date) ? $store->last_trns_date : ''}}">--}}

        {{--            {!! $errors->first('last_trns_date', '<span class="control-error">:message</span>') !!}--}}
        {{--        </div>--}}
        {{--    <div class="row">--}}
        {{--        <div class="control-group col col-6 {{ $errors->has('last_trns_value') ? 'has-error' : ''}}">--}}
        {{--            <label for="last_trns_value"--}}
        {{--                   class="">{{ __('organization::app.store.fields.last_trns_value') }}</label>--}}

        {{--            <input class="control" name="last_trns_value" type="number" id="last_trns_value"--}}
        {{--                   value="{{ isset($store->last_trns_value) ? $store->last_trns_value : ''}}">--}}

        {{--            {!! $errors->first('last_trns_value', '<span class="control-error">:message</span>') !!}--}}
        {{--        </div>--}}
        {{--        <div class="control-group col col-6 {{ $errors->has('last_trns_type') ? 'has-error' : ''}}">--}}
        {{--            <label for="last_trns_type" class="">{{ __('organization::app.store.fields.last_trns_type') }}</label>--}}

        {{--            <input class="control" name="last_trns_type" type="text" id="last_trns_type"--}}
        {{--                   value="{{ isset($store->last_trns_type) ? $store->last_trns_type : ''}}">--}}

        {{--            {!! $errors->first('last_trns_type', '<span class="control-error">:message</span>') !!}--}}
        {{--        </div>--}}
        {{--    </div>--}}
        {{--    <div class="row">--}}
        {{--        <div class="control-group col col-6 {{ $errors->has('begin_bal_credit_fc') ? 'has-error' : ''}}">--}}
        {{--            <label for="begin_bal_credit_fc"--}}
        {{--                   class="">{{ __('organization::app.store.fields.begin_bal_credit_fc') }}</label>--}}

        {{--            <input class="control" name="begin_bal_credit_fc" type="number" id="begin_bal_credit_fc"--}}
        {{--                   value="{{ isset($store->begin_bal_credit_fc) ? $store->begin_bal_credit_fc : ''}}">--}}

        {{--            {!! $errors->first('begin_bal_credit_fc', '<span class="control-error">:message</span>') !!}--}}
        {{--        </div>--}}
        {{--        <div class="control-group col col-6 {{ $errors->has('begin_bal_debit_fc') ? 'has-error' : ''}}">--}}
        {{--            <label for="begin_bal_debit_fc"--}}
        {{--                   class="">{{ __('organization::app.store.fields.begin_bal_debit_fc') }}</label>--}}

        {{--            <input class="control" name="begin_bal_debit_fc" type="number" id="begin_bal_debit_fc"--}}
        {{--                   value="{{ isset($store->begin_bal_debit_fc) ? $store->begin_bal_debit_fc : ''}}">--}}

        {{--            {!! $errors->first('begin_bal_debit_fc', '<span class="control-error">:message</span>') !!}--}}
        {{--        </div>--}}
        {{--    </div>--}}
        {{--    <div class="row">--}}
        {{--        <div class="control-group col col-6 {{ $errors->has('curr_bal_credit_fc') ? 'has-error' : ''}}">--}}
        {{--            <label for="curr_bal_credit_fc"--}}
        {{--                   class="">{{ __('organization::app.store.fields.curr_bal_credit_fc') }}</label>--}}

        {{--            <input class="control" name="curr_bal_credit_fc" type="number" id="curr_bal_credit_fc"--}}
        {{--                   value="{{ isset($store->curr_bal_credit_fc) ? $store->curr_bal_credit_fc : ''}}">--}}

        {{--            {!! $errors->first('curr_bal_credit_fc', '<span class="control-error">:message</span>') !!}--}}
        {{--        </div>--}}
        {{--        <div class="control-group col col-6 {{ $errors->has('curr_bal_debit_fc') ? 'has-error' : ''}}">--}}
        {{--            <label for="curr_bal_debit_fc"--}}
        {{--                   class="">{{ __('organization::app.store.fields.curr_bal_debit_fc') }}</label>--}}

        {{--            <input class="control" name="curr_bal_debit_fc" type="number" id="curr_bal_debit_fc"--}}
        {{--                   value="{{ isset($store->curr_bal_debit_fc) ? $store->curr_bal_debit_fc : ''}}">--}}

        {{--            {!! $errors->first('curr_bal_debit_fc', '<span class="control-error">:message</span>') !!}--}}
        {{--        </div>--}}
        {{--    </div>--}}

        <div class="row">


        </div>
        <div class="container pt-5">
            <div class="mb-3 p-3" style="background: #ccc">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        Last Trans : Reciving Voucher
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        In : 12/05/2015 14:16:16
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        With Amount : 605
                    </div>
                </div>
            </div>
        </div>

    </div>
</accordian>
