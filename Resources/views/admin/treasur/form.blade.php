<accordian :title="'{{ __('organization::app.treasur.general') }}'" :active="true">
    <div slot="body">

        <div class="row">
            <div class="control-group {{ $errors->has('name') ? 'has-error' : ''}}">
                <label for="name" class="required">{{ __('organization::app.treasur.fields.name') }}</label>

                <input class="control" name="name" type="text" id="name"
                       value="{{ isset($treasur->name) ? $treasur->name : ''}}" required>

                {!! $errors->first('name', '<span class="control-error">:message</span>') !!}
            </div>
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

            <div class="control-group {{ $errors->has('code') ? 'has-error' : ''}}">
                <label for="code" class="">{{ __('organization::app.treasur.fields.code') }}</label>

                <input class="control" name="code" type="number" id="code"
                       value="{{ isset($treasur->code) ? $treasur->code : ''}}">

                {!! $errors->first('code', '<span class="control-error">:message</span>') !!}
            </div>

            <div class="control-group {{ $errors->has('casher') ? 'has-error' : ''}}">
                <label for="casher"
                       class="">{{ __('organization::app.treasur.fields.casher') }}</label>

                <input class="control" name="casher" type="number" id="casher"
                       value="{{ isset($treasur->casher) ? $treasur->casher : ''}}">

                {!! $errors->first('casher', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group {{ $errors->has('account_code') ? 'has-error' : ''}}">
                <label for="account_code" class="">{{ __('organization::app.treasur.fields.account_code') }}</label>

                <input class="control" name="account_code" type="text" id="account_code"
                       value="{{ isset($treasur->account_code) ? $treasur->account_code : ''}}">

                {!! $errors->first('account_code', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group {{ $errors->has('analysis_code') ? 'has-error' : ''}}">
                <label for="analysis_code" class="">{{ __('organization::app.treasur.fields.analysis_code') }}</label>

                <input class="control" name="analysis_code" type="text" id="analysis_code"
                       value="{{ isset($treasur->analysis_code) ? $treasur->analysis_code : ''}}">

                {!! $errors->first('analysis_code', '<span class="control-error">:message</span>') !!}
            </div>        </div>

        <div class="row">

            <div class="control-group col col-6 {{ $errors->has('currency_code') ? 'has-error' : ''}}">
                <label for="currency_code"
                       class="required">{{ __('organization::app.treasur.fields.currency_code') }}</label>

                <select id="currency_code" name="currency_code" class="form-control control" data-role="control">

                    @foreach($currency as $item)
                        <option value="{{ $item->id }}" {{$treasur->currency_code == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                    @endforeach
                </select>
                {!! $errors->first('currency_code', '<span class="control-error">:message</span>') !!}
            </div>

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
