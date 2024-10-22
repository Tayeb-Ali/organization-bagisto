<accordian :title="'{{ __('organization::app.company.general') }}'" :active="true">
    <div slot="body">

        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('description') ? 'has-error' : ''}}">
                <label for="description"
                       class="required">{{ __('organization::app.company.fields.description') }}</label>

                <input class="control" name="description" type="text" id="description"
                       value="{{ isset($company->description) ? $company->description : ''}}" required>

                {!! $errors->first('description', '<span class="control-error">:message</span>') !!}
            </div>

            <div class="control-group col col-6 {{ $errors->has('currency') ? 'has-error' : ''}}">
                <label for="currency" class="">{{ __('organization::app.company.fields.currency') }}</label>

                <input class="control" name="currency" type="text" id="currency"
                       value="{{ isset($company->currency) ? $company->currency : ''}}">

                {!! $errors->first('currency', '<span class="control-error">:message</span>') !!}
            </div>

        </div>

        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('status') ? 'has-error' : ''}}">
                <label for="status" class="">{{ __('organization::app.company.fields.status') }}</label>
                <select id="status" name="status" class="form-control control" data-role="control">
                    <option value="2" {{$company->status == 2 ? 'selected' : '' }}>{{__('organization::app.status.Inactive')}}</option>
                    <option value="1" {{$company->status ==1 ? 'selected' : '' }}>{{__('organization::app.status.Active')}}</option>
                </select>
                {!! $errors->first('status', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('gl_ac_levels') ? 'has-error' : ''}}">
                <label for="gl_ac_levels"
                       class="required">{{ __('organization::app.company.fields.gl_ac_levels') }}</label>

                <input class="control" name="gl_ac_levels" type="number" id="gl_ac_levels"
                       value="{{ isset($company->gl_ac_levels) ? $company->gl_ac_levels : ''}}" required>

                {!! $errors->first('gl_ac_levels', '<span class="control-error">:message</span>') !!}
            </div>

        </div>
        <div class="row">
            @if(session('company_id'))
                <div class="control-group col col-6 {{ $errors->has('company_id') ? 'has-error' : ''}}">
                    <label for="company_parent_id"
                           class="required">{{ __('organization::app.company.sub-company.company_parent_id') }}</label>

                    <select id="company_parent_id" name="company_parent_id" class="form-control control"
                            data-role="control">
                        <option
                                value="{{ session('company_id')}}">{{ session('description') }}</option>
                    </select>
                    {!! $errors->first('company_parent_id', '<span class="control-error">:message</span>') !!}
                </div>

            @else
                <div class="control-group col col-6 {{ $errors->has('company_id') ? 'has-error' : ''}}">
                    <label for="company_parent_id"
                           class="required">{{ __('organization::app.company.sub-company.company_parent_id') }}</label>

                    <select id="company_parent_id" name="company_parent_id" class="form-control control"
                            data-role="control">
                        @foreach($subCompany as $item)
                            <option
                                    value="{{ $item->company_id }}" {{$company->company_parent_id == $item->company_id ? 'selected' : '' }}>{{ $item->description }}</option>
                        @endforeach
                        <option value="{{null}}" {{$company->company_parent_id == null ? 'selected' : '' }}>
                            Non
                        </option>
                    </select>
                    {!! $errors->first('company_parent_id', '<span class="control-error">:message</span>') !!}
                </div>
            @endif

            <div class="control-group col col-6 {{ $errors->has('has_sub_company') ? 'has-error' : ''}}">
                <label for="has_sub_company"
                       class="">{{ __('organization::app.company.fields.has_sub_company') }}</label>
                <select id="has_sub_company" name="has_sub_company" class="form-control control" data-role="control">
                    <option value="0" {{$company->has_sub_company == 0? 'selected' : '' }}> {{ __('organization::app.company.sub-company.no') }}</option>
                    <option value="1" {{$company->has_sub_company ==1 ? 'selected' : '' }}>{{ __('organization::app.company.sub-company.yes') }}</option>
                </select>
                {!! $errors->first('has_sub_company', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('gl_ac_level_1_len') ? 'has-error' : ''}}">
                <label for="gl_ac_level_1_len"
                       class="required">{{ __('organization::app.company.fields.gl_ac_level_1_len') }}</label>

                <input class="control" name="gl_ac_level_1_len" type="number" id="gl_ac_level_1_len"
                       value="{{ isset($company->gl_ac_level_1_len) ? $company->gl_ac_level_1_len : ''}}" required>

                {!! $errors->first('gl_ac_level_1_len', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('gl_ac_level_2_len') ? 'has-error' : ''}}">
                <label for="gl_ac_level_2_len"
                       class="required">{{ __('organization::app.company.fields.gl_ac_level_2_len') }}</label>

                <input class="control" name="gl_ac_level_2_len" type="number" id="gl_ac_level_2_len"
                       value="{{ isset($company->gl_ac_level_2_len) ? $company->gl_ac_level_2_len : ''}}" required>

                {!! $errors->first('gl_ac_level_2_len', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('gl_ac_level_3_len') ? 'has-error' : ''}}">
                <label for="gl_ac_level_3_len"
                       class="">{{ __('organization::app.company.fields.gl_ac_level_3_len') }}</label>

                <input class="control" name="gl_ac_level_3_len" type="number" id="gl_ac_level_3_len"
                       value="{{ isset($company->gl_ac_level_3_len) ? $company->gl_ac_level_3_len : ''}}">

                {!! $errors->first('gl_ac_level_3_len', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('gl_ac_level_4_len') ? 'has-error' : ''}}">
                <label for="gl_ac_level_4_len"
                       class="">{{ __('organization::app.company.fields.gl_ac_level_4_len') }}</label>

                <input class="control" name="gl_ac_level_4_len" type="number" id="gl_ac_level_4_len"
                       value="{{ isset($company->gl_ac_level_4_len) ? $company->gl_ac_level_4_len : ''}}">

                {!! $errors->first('gl_ac_level_4_len', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('gl_ac_level_5_len') ? 'has-error' : ''}}">
                <label for="gl_ac_level_5_len"
                       class="">{{ __('organization::app.company.fields.gl_ac_level_5_len') }}</label>

                <input class="control" name="gl_ac_level_5_len" type="number" id="gl_ac_level_5_len"
                       value="{{ isset($company->gl_ac_level_5_len) ? $company->gl_ac_level_5_len : ''}}">

                {!! $errors->first('gl_ac_level_5_len', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('gl_ac_level_6_len') ? 'has-error' : ''}}">
                <label for="gl_ac_level_6_len"
                       class="">{{ __('organization::app.company.fields.gl_ac_level_6_len') }}</label>

                <input class="control" name="gl_ac_level_6_len" type="number" id="gl_ac_level_6_len"
                       value="{{ isset($company->gl_ac_level_6_len) ? $company->gl_ac_level_6_len : ''}}">

                {!! $errors->first('gl_ac_level_6_len', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('gl_ac_level_7_len') ? 'has-error' : ''}}">
                <label for="gl_ac_level_7_len"
                       class="">{{ __('organization::app.company.fields.gl_ac_level_7_len') }}</label>

                <input class="control" name="gl_ac_level_7_len" type="number" id="gl_ac_level_7_len"
                       value="{{ isset($company->gl_ac_level_7_len) ? $company->gl_ac_level_7_len : ''}}">

                {!! $errors->first('gl_ac_level_7_len', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('gl_ac_level_8_len') ? 'has-error' : ''}}">
                <label for="gl_ac_level_8_len"
                       class="">{{ __('organization::app.company.fields.gl_ac_level_8_len') }}</label>

                <input class="control" name="gl_ac_level_8_len" type="number" id="gl_ac_level_8_len"
                       value="{{ isset($company->gl_ac_level_8_len) ? $company->gl_ac_level_8_len : ''}}">

                {!! $errors->first('gl_ac_level_8_len', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('gl_ac_level_9_len') ? 'has-error' : ''}}">
                <label for="gl_ac_level_9_len"
                       class="">{{ __('organization::app.company.fields.gl_ac_level_9_len') }}</label>

                <input class="control" name="gl_ac_level_9_len" type="number" id="gl_ac_level_9_len"
                       value="{{ isset($company->gl_ac_level_9_len) ? $company->gl_ac_level_9_len : ''}}">

                {!! $errors->first('gl_ac_level_9_len', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('gl_ac_level_0_len') ? 'has-error' : ''}}">
                <label for="gl_ac_level_0_len"
                       class="required">{{ __('organization::app.company.fields.gl_ac_level_0_len') }}</label>

                <input class="control" name="gl_ac_level_0_len" type="number" id="gl_ac_level_0_len"
                       value="{{ isset($company->gl_ac_level_0_len) ? $company->gl_ac_level_0_len : ''}}" required>

                {!! $errors->first('gl_ac_level_0_len', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('gl_cc_levels') ? 'has-error' : ''}}">
                <label for="gl_cc_levels" class="">{{ __('organization::app.company.fields.gl_cc_levels') }}</label>

                <input class="control" name="gl_cc_levels" type="number" id="gl_cc_levels"
                       value="{{ isset($company->gl_cc_levels) ? $company->gl_cc_levels : ''}}">

                {!! $errors->first('gl_cc_levels', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('gl_cc_level_0_len') ? 'has-error' : ''}}">
                <label for="gl_cc_level_0_len"
                       class="">{{ __('organization::app.company.fields.gl_cc_level_0_len') }}</label>

                <input class="control" name="gl_cc_level_0_len" type="number" id="gl_cc_level_0_len"
                       value="{{ isset($company->gl_cc_level_0_len) ? $company->gl_cc_level_0_len : ''}}">

                {!! $errors->first('gl_cc_level_0_len', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('gl_cc_level_1_len') ? 'has-error' : ''}}">
                <label for="gl_cc_level_1_len"
                       class="">{{ __('organization::app.company.fields.gl_cc_level_1_len') }}</label>

                <input class="control" name="gl_cc_level_1_len" type="number" id="gl_cc_level_1_len"
                       value="{{ isset($company->gl_cc_level_1_len) ? $company->gl_cc_level_1_len : ''}}">

                {!! $errors->first('gl_cc_level_1_len', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('gl_cc_level_2_len') ? 'has-error' : ''}}">
                <label for="gl_cc_level_2_len"
                       class="">{{ __('organization::app.company.fields.gl_cc_level_2_len') }}</label>

                <input class="control" name="gl_cc_level_2_len" type="number" id="gl_cc_level_2_len"
                       value="{{ isset($company->gl_cc_level_2_len) ? $company->gl_cc_level_2_len : ''}}">

                {!! $errors->first('gl_cc_level_2_len', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('gl_cc_level_3_len') ? 'has-error' : ''}}">
                <label for="gl_cc_level_3_len"
                       class="">{{ __('organization::app.company.fields.gl_cc_level_3_len') }}</label>

                <input class="control" name="gl_cc_level_3_len" type="number" id="gl_cc_level_3_len"
                       value="{{ isset($company->gl_cc_level_3_len) ? $company->gl_cc_level_3_len : ''}}">

                {!! $errors->first('gl_cc_level_3_len', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('gl_cc_level_4_len') ? 'has-error' : ''}}">
                <label for="gl_cc_level_4_len"
                       class="">{{ __('organization::app.company.fields.gl_cc_level_4_len') }}</label>

                <input class="control" name="gl_cc_level_4_len" type="number" id="gl_cc_level_4_len"
                       value="{{ isset($company->gl_cc_level_4_len) ? $company->gl_cc_level_4_len : ''}}">

                {!! $errors->first('gl_cc_level_4_len', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('gl_cc_level_5_len') ? 'has-error' : ''}}">
                <label for="gl_cc_level_5_len"
                       class="">{{ __('organization::app.company.fields.gl_cc_level_5_len') }}</label>

                <input class="control" name="gl_cc_level_5_len" type="number" id="gl_cc_level_5_len"
                       value="{{ isset($company->gl_cc_level_5_len) ? $company->gl_cc_level_5_len : ''}}">

                {!! $errors->first('gl_cc_level_5_len', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('gl_cc_level_6_len') ? 'has-error' : ''}}">
                <label for="gl_cc_level_6_len"
                       class="">{{ __('organization::app.company.fields.gl_cc_level_6_len') }}</label>

                <input class="control" name="gl_cc_level_6_len" type="number" id="gl_cc_level_6_len"
                       value="{{ isset($company->gl_cc_level_6_len) ? $company->gl_cc_level_6_len : ''}}">

                {!! $errors->first('gl_cc_level_6_len', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('gl_cc_level_7_len') ? 'has-error' : ''}}">
                <label for="gl_cc_level_7_len"
                       class="">{{ __('organization::app.company.fields.gl_cc_level_7_len') }}</label>

                <input class="control" name="gl_cc_level_7_len" type="number" id="gl_cc_level_7_len"
                       value="{{ isset($company->gl_cc_level_7_len) ? $company->gl_cc_level_7_len : ''}}">

                {!! $errors->first('gl_cc_level_7_len', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('gl_cc_level_8_len') ? 'has-error' : ''}}">
                <label for="gl_cc_level_8_len"
                       class="">{{ __('organization::app.company.fields.gl_cc_level_8_len') }}</label>

                <input class="control" name="gl_cc_level_8_len" type="number" id="gl_cc_level_8_len"
                       value="{{ isset($company->gl_cc_level_8_len) ? $company->gl_cc_level_8_len : ''}}">

                {!! $errors->first('gl_cc_level_8_len', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('gl_cc_level_9_len') ? 'has-error' : ''}}">
                <label for="gl_cc_level_9_len"
                       class="">{{ __('organization::app.company.fields.gl_cc_level_9_len') }}</label>

                <input class="control" name="gl_cc_level_9_len" type="number" id="gl_cc_level_9_len"
                       value="{{ isset($company->gl_cc_level_9_len) ? $company->gl_cc_level_9_len : ''}}">

                {!! $errors->first('gl_cc_level_9_len', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('gl_cc_level_10_len') ? 'has-error' : ''}}">
                <label for="gl_cc_level_10_len"
                       class="">{{ __('organization::app.company.fields.gl_cc_level_10_len') }}</label>

                <input class="control" name="gl_cc_level_10_len" type="number" id="gl_cc_level_10_len"
                       value="{{ isset($company->gl_cc_level_10_len) ? $company->gl_cc_level_10_len : ''}}">

                {!! $errors->first('gl_cc_level_10_len', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('cust_code_len') ? 'has-error' : ''}}">
                <label for="cust_code_len" class="">{{ __('organization::app.company.fields.cust_code_len') }}</label>

                <input class="control" name="cust_code_len" type="number" id="cust_code_len"
                       value="{{ isset($company->cust_code_len) ? $company->cust_code_len : ''}}">

                {!! $errors->first('cust_code_len', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('supp_code_len') ? 'has-error' : ''}}">
                <label for="supp_code_len" class="">{{ __('organization::app.company.fields.supp_code_len') }}</label>

                <input class="control" name="supp_code_len" type="number" id="supp_code_len"
                       value="{{ isset($company->supp_code_len) ? $company->supp_code_len : ''}}">

                {!! $errors->first('supp_code_len', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('bank_code_len') ? 'has-error' : ''}}">
                <label for="bank_code_len" class="">{{ __('organization::app.company.fields.bank_code_len') }}</label>

                <input class="control" name="bank_code_len" type="number" id="bank_code_len"
                       value="{{ isset($company->bank_code_len) ? $company->bank_code_len : ''}}">

                {!! $errors->first('bank_code_len', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('trea_code_len') ? 'has-error' : ''}}">
                <label for="trea_code_len" class="">{{ __('organization::app.company.fields.trea_code_len') }}</label>

                <input class="control" name="trea_code_len" type="number" id="trea_code_len"
                       value="{{ isset($company->trea_code_len) ? $company->trea_code_len : ''}}">

                {!! $errors->first('trea_code_len', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('stor_code_len') ? 'has-error' : ''}}">
                <label for="stor_code_len" class="">{{ __('organization::app.company.fields.stor_code_len') }}</label>

                <input class="control" name="stor_code_len" type="number" id="stor_code_len"
                       value="{{ isset($company->stor_code_len) ? $company->stor_code_len : ''}}">

                {!! $errors->first('stor_code_len', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('srep_code_len') ? 'has-error' : ''}}">
                <label for="srep_code_len" class="">{{ __('organization::app.company.fields.srep_code_len') }}</label>

                <input class="control" name="srep_code_len" type="number" id="srep_code_len"
                       value="{{ isset($company->srep_code_len) ? $company->srep_code_len : ''}}">

                {!! $errors->first('srep_code_len', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('expe_code_len') ? 'has-error' : ''}}">
                <label for="expe_code_len" class="">{{ __('organization::app.company.fields.expe_code_len') }}</label>

                <input class="control" name="expe_code_len" type="number" id="expe_code_len"
                       value="{{ isset($company->expe_code_len) ? $company->expe_code_len : ''}}">

                {!! $errors->first('expe_code_len', '<span class="control-error">:message</span>') !!}
            </div>

            <div class="control-group col col-6 {{ $errors->has('web') ? 'has-error' : ''}}">
                <label for="web" class="">{{ __('organization::app.company.fields.web') }}</label>

                <input class="control" name="web" type="text" id="web"
                       value="{{ isset($company->web) ? $company->web : ''}}">

                {!! $errors->first('web', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('asset_code_len') ? 'has-error' : ''}}">
                <label for="asset_code_len" class="">{{ __('organization::app.company.fields.asset_code_len') }}</label>

                <input class="control" name="asset_code_len" type="number" id="asset_code_len"
                       value="{{ isset($company->asset_code_len) ? $company->asset_code_len : ''}}">

                {!! $errors->first('asset_code_len', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('locat_code_len') ? 'has-error' : ''}}">
                <label for="locat_code_len" class="">{{ __('organization::app.company.fields.locat_code_len') }}</label>

                <input class="control" name="locat_code_len" type="number" id="locat_code_len"
                       value="{{ isset($company->locat_code_len) ? $company->locat_code_len : ''}}">

                {!! $errors->first('locat_code_len', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('product_code_len') ? 'has-error' : ''}}">
                <label for="product_code_len"
                       class="">{{ __('organization::app.company.fields.product_code_len') }}</label>

                <input class="control" name="product_code_len" type="number" id="product_code_len"
                       value="{{ isset($company->product_code_len) ? $company->product_code_len : ''}}">

                {!! $errors->first('product_code_len', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('product_batch_len') ? 'has-error' : ''}}">
                <label for="product_batch_len"
                       class="">{{ __('organization::app.company.fields.product_batch_len') }}</label>

                <input class="control" name="product_batch_len" type="number" id="product_batch_len"
                       value="{{ isset($company->product_batch_len) ? $company->product_batch_len : ''}}">

                {!! $errors->first('product_batch_len', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('users_code_len') ? 'has-error' : ''}}">
                <label for="users_code_len" class="">{{ __('organization::app.company.fields.users_code_len') }}</label>

                <input class="control" name="users_code_len" type="number" id="users_code_len"
                       value="{{ isset($company->users_code_len) ? $company->users_code_len : ''}}">

                {!! $errors->first('users_code_len', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('sub_cust_code_len') ? 'has-error' : ''}}">
                <label for="sub_cust_code_len"
                       class="">{{ __('organization::app.company.fields.sub_cust_code_len') }}</label>

                <input class="control" name="sub_cust_code_len" type="number" id="sub_cust_code_len"
                       value="{{ isset($company->sub_cust_code_len) ? $company->sub_cust_code_len : ''}}">

                {!! $errors->first('sub_cust_code_len', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('sub_store_code_len') ? 'has-error' : ''}}">
                <label for="sub_store_code_len"
                       class="">{{ __('organization::app.company.fields.sub_store_code_len') }}</label>

                <input class="control" name="sub_store_code_len" type="number" id="sub_store_code_len"
                       value="{{ isset($company->sub_store_code_len) ? $company->sub_store_code_len : ''}}">

                {!! $errors->first('sub_store_code_len', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('curr_fin_year') ? 'has-error' : ''}}">
                <label for="curr_fin_year" class="">{{ __('organization::app.company.fields.curr_fin_year') }}</label>

                <input class="control" name="curr_fin_year" type="text" id="curr_fin_year"
                       value="{{ isset($company->curr_fin_year) ? $company->curr_fin_year : ''}}">

                {!! $errors->first('curr_fin_year', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('company_type') ? 'has-error' : ''}}">
                <label for="company_type" class="">{{ __('organization::app.company.fields.company_type') }}</label>

                <input class="control" name="company_type" type="number" id="company_type"
                       value="{{ isset($company->company_type) ? $company->company_type : ''}}">

                {!! $errors->first('company_type', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('local_partner_percent') ? 'has-error' : ''}}">
                <label for="local_partner_percent"
                       class="">{{ __('organization::app.company.fields.local_partner_percent') }}</label>

                <input class="control" name="local_partner_percent" type="number" id="local_partner_percent"
                       value="{{ isset($company->local_partner_percent) ? $company->local_partner_percent : ''}}">

                {!! $errors->first('local_partner_percent', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('zakah_tax_formula') ? 'has-error' : ''}}">
                <label for="zakah_tax_formula"
                       class="">{{ __('organization::app.company.fields.zakah_tax_formula') }}</label>

                <input class="control" name="zakah_tax_formula" type="text" id="zakah_tax_formula"
                       value="{{ isset($company->zakah_tax_formula) ? $company->zakah_tax_formula : ''}}">

                {!! $errors->first('zakah_tax_formula', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('cust_code_type') ? 'has-error' : ''}}">
                <label for="cust_code_type" class="">{{ __('organization::app.company.fields.cust_code_type') }}</label>

                <input class="control" name="cust_code_type" type="text" id="cust_code_type"
                       value="{{ isset($company->cust_code_type) ? $company->cust_code_type : ''}}">

                {!! $errors->first('cust_code_type', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('supp_code_type') ? 'has-error' : ''}}">
                <label for="supp_code_type" class="">{{ __('organization::app.company.fields.supp_code_type') }}</label>

                <input class="control" name="supp_code_type" type="text" id="supp_code_type"
                       value="{{ isset($company->supp_code_type) ? $company->supp_code_type : ''}}">

                {!! $errors->first('supp_code_type', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('bank_code_type') ? 'has-error' : ''}}">
                <label for="bank_code_type" class="">{{ __('organization::app.company.fields.bank_code_type') }}</label>

                <input class="control" name="bank_code_type" type="text" id="bank_code_type"
                       value="{{ isset($company->bank_code_type) ? $company->bank_code_type : ''}}">

                {!! $errors->first('bank_code_type', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('trea_code_type') ? 'has-error' : ''}}">
                <label for="trea_code_type" class="">{{ __('organization::app.company.fields.trea_code_type') }}</label>

                <input class="control" name="trea_code_type" type="text" id="trea_code_type"
                       value="{{ isset($company->trea_code_type) ? $company->trea_code_type : ''}}">

                {!! $errors->first('trea_code_type', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('stor_code_type') ? 'has-error' : ''}}">
                <label for="stor_code_type" class="">{{ __('organization::app.company.fields.stor_code_type') }}</label>

                <input class="control" name="stor_code_type" type="text" id="stor_code_type"
                       value="{{ isset($company->stor_code_type) ? $company->stor_code_type : ''}}">

                {!! $errors->first('stor_code_type', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('srep_code_type') ? 'has-error' : ''}}">
                <label for="srep_code_type" class="">{{ __('organization::app.company.fields.srep_code_type') }}</label>

                <input class="control" name="srep_code_type" type="text" id="srep_code_type"
                       value="{{ isset($company->srep_code_type) ? $company->srep_code_type : ''}}">

                {!! $errors->first('srep_code_type', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('expe_code_type') ? 'has-error' : ''}}">
                <label for="expe_code_type" class="">{{ __('organization::app.company.fields.expe_code_type') }}</label>

                <input class="control" name="expe_code_type" type="text" id="expe_code_type"
                       value="{{ isset($company->expe_code_type) ? $company->expe_code_type : ''}}">

                {!! $errors->first('expe_code_type', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('asset_code_type') ? 'has-error' : ''}}">
                <label for="asset_code_type"
                       class="">{{ __('organization::app.company.fields.asset_code_type') }}</label>

                <input class="control" name="asset_code_type" type="text" id="asset_code_type"
                       value="{{ isset($company->asset_code_type) ? $company->asset_code_type : ''}}">

                {!! $errors->first('asset_code_type', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('locat_code_type') ? 'has-error' : ''}}">
                <label for="locat_code_type"
                       class="">{{ __('organization::app.company.fields.locat_code_type') }}</label>

                <input class="control" name="locat_code_type" type="text" id="locat_code_type"
                       value="{{ isset($company->locat_code_type) ? $company->locat_code_type : ''}}">

                {!! $errors->first('locat_code_type', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('product_code_type') ? 'has-error' : ''}}">
                <label for="product_code_type"
                       class="">{{ __('organization::app.company.fields.product_code_type') }}</label>

                <input class="control" name="product_code_type" type="text" id="product_code_type"
                       value="{{ isset($company->product_code_type) ? $company->product_code_type : ''}}">

                {!! $errors->first('product_code_type', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('product_batch_type') ? 'has-error' : ''}}">
                <label for="product_batch_type"
                       class="">{{ __('organization::app.company.fields.product_batch_type') }}</label>

                <input class="control" name="product_batch_type" type="text" id="product_batch_type"
                       value="{{ isset($company->product_batch_type) ? $company->product_batch_type : ''}}">

                {!! $errors->first('product_batch_type', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('users_code_type') ? 'has-error' : ''}}">
                <label for="users_code_type"
                       class="">{{ __('organization::app.company.fields.users_code_type') }}</label>

                <input class="control" name="users_code_type" type="text" id="users_code_type"
                       value="{{ isset($company->users_code_type) ? $company->users_code_type : ''}}">

                {!! $errors->first('users_code_type', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('sub_cust_code_type') ? 'has-error' : ''}}">
                <label for="sub_cust_code_type"
                       class="">{{ __('organization::app.company.fields.sub_cust_code_type') }}</label>

                <input class="control" name="sub_cust_code_type" type="text" id="sub_cust_code_type"
                       value="{{ isset($company->sub_cust_code_type) ? $company->sub_cust_code_type : ''}}">

                {!! $errors->first('sub_cust_code_type', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('sub_store_code_type') ? 'has-error' : ''}}">
                <label for="sub_store_code_type"
                       class="">{{ __('organization::app.company.fields.sub_store_code_type') }}</label>

                <input class="control" name="sub_store_code_type" type="text" id="sub_store_code_type"
                       value="{{ isset($company->sub_store_code_type) ? $company->sub_store_code_type : ''}}">

                {!! $errors->first('sub_store_code_type', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col col-6 {{ $errors->has('short_desc') ? 'has-error' : ''}}">
                <label for="short_desc" class="">{{ __('organization::app.company.fields.short_desc') }}</label>

                <input class="control" name="short_desc" type="text" id="short_desc"
                       value="{{ isset($company->short_desc) ? $company->short_desc : ''}}">

                {!! $errors->first('short_desc', '<span class="control-error">:message</span>') !!}
            </div>
        </div>

    </div>
</accordian>
