<accordian :title="'{{ __('organization::app.store.general') }}'" :active="true">
    <div slot="body">
<div class="row">
    <div class="control-group col col-6 {{ $errors->has('code') ? 'has-error' : ''}}">
        <label for="code" class="required">{{ __('organization::app.store.fields.code') }}</label>

        <input class="control" name="code" type="text" id="code" disabled
               value="{{ isset($store->code) ? $store->code : ''}}" >

        {!! $errors->first('code', '<span class="control-error">:message</span>') !!}
    </div>

</div>
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

                    <option value="1" {{$store->status == 1 ? 'selected' : '' }}>Activity</option>
                    <option value="2" {{$store->status ==2 ? 'selected' : '' }}>In-activity</option>
                </select>
                {!! $errors->first('status', '<span class="control-error">:message</span>') !!}
            </div>
        </div>

        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('name') ? 'has-error' : ''}}">
                <label for="name" class="required">{{ __('organization::app.store.fields.name') }}</label>

                <input class="control" name="name" type="text" id="name"
                       value="{{ isset($store->name) ? $store->name : ''}}" required>

                {!! $errors->first('name', '<span class="control-error">:message</span>') !!}
            </div>

            <div class="control-group col col-6{{ $errors->has('account_no') ? 'has-error' : ''}}">
                <label for="name" class="required">{{ __('organization::app.store.fields.account_no') }}</label>

                <input class="control" name="account_no" type="text" id="name"
                       value="{{ isset($store->account_no) ? $store->account_no : ''}}" required>

                {!! $errors->first('name', '<span class="control-error">:message</span>') !!}
            </div>

        </div>
        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('bank_name') ? 'has-error' : ''}}">
                <label for="bank_name" class="">{{ __('organization::app.store.fields.bank_name') }}</label>

                <input class="control" name="bank_name" type="text" id="bank_name"
                       value="{{ isset($store->bank_name) ? $store->bank_name : ''}}">

                {!! $errors->first('bank_name', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('currency') ? 'has-error' : ''}}">
                <label for="currency" class="required">{{ __('organization::app.store.fields.currency') }}</label>

                <select id="currency" name="currency" class="form-control control" data-role="control">

                    @foreach($currency as $item)
                        <option value="{{ $item->id }}" {{$store->currency == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                    @endforeach
                </select>
                {!! $errors->first('currency', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('account_code') ? 'has-error' : ''}}">
                <label for="account_code" class="">{{ __('organization::app.store.fields.account_code') }}</label>

                <input class="control" name="account_code" type="text" id="account_code"
                       value="{{ isset($store->account_code) ? $store->account_code : ''}}">

                {!! $errors->first('account_code', '<span class="control-error">:message</span>') !!}

            </div>
            <div class="control-group col col-6 {{ $errors->has('account_type') ? 'has-error' : ''}}">
                <label for="account_type" class="">{{ __('organization::app.store.fields.account_type') }}</label>

                <input class="control" name="account_type" type="text" id="account_type"
                       value="{{ isset($store->account_type) ? $store->account_code : ''}}">

                {!! $errors->first('account_type', '<span class="control-error">:message</span>') !!}

            </div>

        </div>
        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('analysis_code') ? 'has-error' : ''}}">
                <label for="analysis_code" class="">{{ __('organization::app.store.fields.analysis_code') }}</label>

                <input class="control" name="analysis_code" type="text" id="analysis_code"
                       value="{{ isset($store->analysis_code) ? $store->analysis_code : ''}}">

                {!! $errors->first('analysis_code', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('contact_person') ? 'has-error' : ''}}">
                <label for="contact_person" class="">{{ __('organization::app.store.fields.contact_person') }}</label>

                <input class="control" name="contact_person" type="text" id="contact_person"
                       value="{{ isset($store->contact_person) ? $store->contact_person : ''}}">

                {!! $errors->first('contact_person', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
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
            <div class="control-group col col-6 {{ $errors->has('phone') ? 'has-error' : ''}}">
                <label for="phone" class="">{{ __('organization::app.store.fields.phone') }}</label>

                <input class="control" name="phone" type="text" id="phone"
                       value="{{ isset($store->phone) ? $store->phone : ''}}">

                {!! $errors->first('phone', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('pobox') ? 'has-error' : ''}}">
                <label for="pobox" class="">{{ __('organization::app.store.fields.pobox') }}</label>

                <input class="control" name="pobox" type="text" id="pobox"
                       value="{{ isset($store->pobox) ? $store->pobox : ''}}">

                {!! $errors->first('pobox', '<span class="control-error">:message</span>') !!}
            </div>

            <div class="control-group col col-6 {{ $errors->has('fax') ? 'has-error' : ''}}">
                <label for="fax" class="">{{ __('organization::app.store.fields.fax') }}</label>

                <input class="control" name="fax" type="text" id="fax"
                       value="{{ isset($store->fax) ? $store->fax : ''}}">

                {!! $errors->first('fax', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
       <div class="row">
           <div class="control-group col col-6{{ $errors->has('email') ? 'has-error' : ''}}">
               <label for="email" class="">{{ __('organization::app.store.fields.email') }}</label>

               <input class="control" name="email" type="text" id="email"
                      value="{{ isset($store->email) ? $store->email : ''}}">

               {!! $errors->first('email', '<span class="control-error">:message</span>') !!}
           </div>
           <div class="control-group col col-6 {{ $errors->has('credit_limit') ? 'has-error' : ''}}">
                               <label for="credit_limit" class="">{{ __('organization::app.store.fields.credit_limit') }}</label>

                               <input class="control" name="credit_limit" type="number" id="credit_limit"
                                      value="{{ isset($store->credit_limit) ? $store->credit_limit : ''}}">

                               {!! $errors->first('credit_limit', '<span class="control-error">:message</span>') !!}
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
            <div class=" p-3" style="background: #ccc">
                <div class="row">
                    <div class="col">
                        <h6>Financials</h6>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 px-1">


                        <table class="float-left w-100"  >
                            <tr>
                                <td></td>
                                <td colspan="2" class="text-center bg-primary text-light border ">Begining Balance</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center bg-primary text-light border ">Debit</td>
                                <td class="text-center bg-primary text-light border ">Creditt</td>
                            </tr>
                            <tr>
                                <td >Foreign Currancy</td>
                                <td class="border border-dark"></td>
                                <td class="border border-dark"></td>
                            </tr>
                            <tr>
                                <td >Foreign Currancy</td>
                                <td class="border border-dark"></td>
                                <td class="border border-dark"></td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-lg-4 px-1">
                        <table class=" w-100" border>
                            <tr>

                                <td colspan="2" class="text-center bg-primary text-light">Trading Volume</td>
                            </tr>
                            <tr>

                                <td class="text-center bg-primary text-light">Debit</td>
                                <td class="text-center bg-primary text-light">Creditt</td>
                            </tr>
                            <tr>
                                <td >600,050.00y</td>
                                <td>,00</td>
                            </tr>
                            <tr>
                                <td >600,050.00y</td>
                                <td>,00</td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-lg-4 px-1">
                        <table class="w-100" border>
                            <tr>

                                <td colspan="2" class="text-center bg-primary text-light">Trading Volume</td>
                            </tr>
                            <tr>

                                <td class="text-center bg-primary text-light">Debit</td>
                                <td class="text-center bg-primary text-light">Creditt</td>
                            </tr>
                            <tr>
                                <td >600,050.00y</td>
                                <td>,00</td>
                            </tr>
                            <tr>
                                <td >600,050.00y</td>
                                <td>,00</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</accordian>