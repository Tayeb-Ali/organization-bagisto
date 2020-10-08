<accordian :title="'{{ __('organization::app.companybranch.general') }}'" :active="true">
    <div slot="body">

        <div class="control-group {{ $errors->has('company_id') ? 'has-error' : ''}}">
            <label for="company_id" class="">{{ __('organization::app.companybranch.fields.company_id') }}</label>

            <select id="company_id" name="company_id" class="form-control" data-role="control">
                @foreach($company as $item)
                    <option value="{{ $item->company_id }}" {{$companybranch->company_id == $item->company_id ? 'selected' : '' }}>{{ $item->description }}</option>
                @endforeach
            </select>

            {!! $errors->first('company_id', '<span class="control-error">:message</span>') !!}
        </div>


        <div class="control-group {{ $errors->has('short_desc') ? 'has-error' : ''}}">
            <label for="short_desc"
                   class="required">{{ __('organization::app.companybranch.fields.short_desc') }}</label>

            <input class="control" name="short_desc" type="text" id="short_desc"
                   value="{{ isset($companybranch->short_desc) ? $companybranch->short_desc : ''}}" required>

            {!! $errors->first('short_desc', '<span class="control-error">:message</span>') !!}
        </div>
        <div class="control-group {{ $errors->has('description') ? 'has-error' : ''}}">
            <label for="description" class="">{{ __('organization::app.companybranch.fields.description') }}</label>

            <input class="control" name="description" type="text" id="description"
                   value="{{ isset($companybranch->description) ? $companybranch->description : ''}}">

            {!! $errors->first('description', '<span class="control-error">:message</span>') !!}
        </div>
        <div class="control-group {{ $errors->has('branch_country') ? 'has-error' : ''}}">
            <label for="branch_country"
                   class="">{{ __('organization::app.companybranch.fields.branch_country') }}</label>

            <input class="control" name="branch_country" type="text" id="branch_country"
                   value="{{ isset($companybranch->branch_country) ? $companybranch->branch_country : ''}}">

            {!! $errors->first('branch_country', '<span class="control-error">:message</span>') !!}
        </div>
        <div class="control-group {{ $errors->has('branch_weight') ? 'has-error' : ''}}">
            <label for="branch_weight" class="">{{ __('organization::app.companybranch.fields.branch_weight') }}</label>

            <input class="control" name="branch_weight" type="number" id="branch_weight"
                   value="{{ isset($companybranch->branch_weight) ? $companybranch->branch_weight : ''}}">

            {!! $errors->first('branch_weight', '<span class="control-error">:message</span>') !!}
        </div>
        <div class="control-group {{ $errors->has('branch_manager') ? 'has-error' : ''}}">
            <label for="branch_manager"
                   class="">{{ __('organization::app.companybranch.fields.branch_manager') }}</label>

            <input class="control" name="branch_manager" type="text" id="branch_manager"
                   value="{{ isset($companybranch->branch_manager) ? $companybranch->branch_manager : ''}}">

            {!! $errors->first('branch_manager', '<span class="control-error">:message</span>') !!}
        </div>
        <div class="control-group {{ $errors->has('currency') ? 'has-error' : ''}}">
            <label for="currency" class="">{{ __('organization::app.companybranch.fields.currency') }}</label>

            <input class="control" name="currency" type="text" id="currency"
                   value="{{ isset($companybranch->currency) ? $companybranch->currency : ''}}">

            {!! $errors->first('currency', '<span class="control-error">:message</span>') !!}
        </div>
        <div class="control-group {{ $errors->has('status') ? 'has-error' : ''}}">
            <label for="status" class="">{{ __('organization::app.companybranch.fields.status') }}</label>

            <input class="control" name="status" type="text" id="status"
                   value="{{ isset($companybranch->status) ? $companybranch->status : ''}}">

            {!! $errors->first('status', '<span class="control-error">:message</span>') !!}
        </div>
        <div class="control-group {{ $errors->has('amend_by') ? 'has-error' : ''}}">
            <label for="amend_by" class="">{{ __('organization::app.companybranch.fields.amend_by') }}</label>

            <input class="control" name="amend_by" type="text" id="amend_by"
                   value="{{ isset($companybranch->amend_by) ? $companybranch->amend_by : ''}}">

            {!! $errors->first('amend_by', '<span class="control-error">:message</span>') !!}
        </div>
        <div class="control-group {{ $errors->has('amend_date') ? 'has-error' : ''}}">
            <label for="amend_date" class="">{{ __('organization::app.companybranch.fields.amend_date') }}</label>

            <input class="control" name="amend_date" type="datetime-local" id="amend_date"
                   value="{{ isset($companybranch->amend_date) ? $companybranch->amend_date : ''}}">

            {!! $errors->first('amend_date', '<span class="control-error">:message</span>') !!}
        </div>
        <div class="control-group {{ $errors->has('phone') ? 'has-error' : ''}}">
            <label for="phone" class="">{{ __('organization::app.companybranch.fields.phone') }}</label>

            <input class="control" name="phone" type="text" id="phone"
                   value="{{ isset($companybranch->phone) ? $companybranch->phone : ''}}">

            {!! $errors->first('phone', '<span class="control-error">:message</span>') !!}
        </div>
        <div class="control-group {{ $errors->has('fax') ? 'has-error' : ''}}">
            <label for="fax" class="">{{ __('organization::app.companybranch.fields.fax') }}</label>

            <input class="control" name="fax" type="text" id="fax"
                   value="{{ isset($companybranch->fax) ? $companybranch->fax : ''}}">

            {!! $errors->first('fax', '<span class="control-error">:message</span>') !!}
        </div>
        <div class="control-group {{ $errors->has('email') ? 'has-error' : ''}}">
            <label for="email" class="">{{ __('organization::app.companybranch.fields.email') }}</label>

            <input class="control" name="email" type="text" id="email"
                   value="{{ isset($companybranch->email) ? $companybranch->email : ''}}">

            {!! $errors->first('email', '<span class="control-error">:message</span>') !!}
        </div>
        <div class="control-group {{ $errors->has('cost_center') ? 'has-error' : ''}}">
            <label for="cost_center" class="">{{ __('organization::app.companybranch.fields.cost_center') }}</label>

            <input class="control" name="cost_center" type="text" id="cost_center"
                   value="{{ isset($companybranch->cost_center) ? $companybranch->cost_center : ''}}">

            {!! $errors->first('cost_center', '<span class="control-error">:message</span>') !!}
        </div>
        <div class="control-group {{ $errors->has('ship_to_address') ? 'has-error' : ''}}">
            <label for="ship_to_address"
                   class="">{{ __('organization::app.companybranch.fields.ship_to_address') }}</label>

            <input class="control" name="ship_to_address" type="text" id="ship_to_address"
                   value="{{ isset($companybranch->ship_to_address) ? $companybranch->ship_to_address : ''}}">

            {!! $errors->first('ship_to_address', '<span class="control-error">:message</span>') !!}
        </div>
        <div class="control-group {{ $errors->has('ship_to_phone') ? 'has-error' : ''}}">
            <label for="ship_to_phone" class="">{{ __('organization::app.companybranch.fields.ship_to_phone') }}</label>

            <input class="control" name="ship_to_phone" type="text" id="ship_to_phone"
                   value="{{ isset($companybranch->ship_to_phone) ? $companybranch->ship_to_phone : ''}}">

            {!! $errors->first('ship_to_phone', '<span class="control-error">:message</span>') !!}
        </div>
        <div class="control-group {{ $errors->has('ship_to_fax') ? 'has-error' : ''}}">
            <label for="ship_to_fax" class="">{{ __('organization::app.companybranch.fields.ship_to_fax') }}</label>

            <input class="control" name="ship_to_fax" type="text" id="ship_to_fax"
                   value="{{ isset($companybranch->ship_to_fax) ? $companybranch->ship_to_fax : ''}}">

            {!! $errors->first('ship_to_fax', '<span class="control-error">:message</span>') !!}
        </div>
        <div class="control-group {{ $errors->has('ship_to_city') ? 'has-error' : ''}}">
            <label for="ship_to_city" class="">{{ __('organization::app.companybranch.fields.ship_to_city') }}</label>

            <input class="control" name="ship_to_city" type="text" id="ship_to_city"
                   value="{{ isset($companybranch->ship_to_city) ? $companybranch->ship_to_city : ''}}">

            {!! $errors->first('ship_to_city', '<span class="control-error">:message</span>') !!}
        </div>
        <div class="control-group {{ $errors->has('ship_to_country') ? 'has-error' : ''}}">
            <label for="ship_to_country"
                   class="">{{ __('organization::app.companybranch.fields.ship_to_country') }}</label>

            <input class="control" name="ship_to_country" type="text" id="ship_to_country"
                   value="{{ isset($companybranch->ship_to_country) ? $companybranch->ship_to_country : ''}}">

            {!! $errors->first('ship_to_country', '<span class="control-error">:message</span>') !!}
        </div>
        <div class="control-group {{ $errors->has('bill_to_address') ? 'has-error' : ''}}">
            <label for="bill_to_address"
                   class="">{{ __('organization::app.companybranch.fields.bill_to_address') }}</label>

            <input class="control" name="bill_to_address" type="text" id="bill_to_address"
                   value="{{ isset($companybranch->bill_to_address) ? $companybranch->bill_to_address : ''}}">

            {!! $errors->first('bill_to_address', '<span class="control-error">:message</span>') !!}
        </div>
        <div class="control-group {{ $errors->has('bill_to_phone') ? 'has-error' : ''}}">
            <label for="bill_to_phone" class="">{{ __('organization::app.companybranch.fields.bill_to_phone') }}</label>

            <input class="control" name="bill_to_phone" type="text" id="bill_to_phone"
                   value="{{ isset($companybranch->bill_to_phone) ? $companybranch->bill_to_phone : ''}}">

            {!! $errors->first('bill_to_phone', '<span class="control-error">:message</span>') !!}
        </div>
        <div class="control-group {{ $errors->has('bill_to_fax') ? 'has-error' : ''}}">
            <label for="bill_to_fax" class="">{{ __('organization::app.companybranch.fields.bill_to_fax') }}</label>

            <input class="control" name="bill_to_fax" type="text" id="bill_to_fax"
                   value="{{ isset($companybranch->bill_to_fax) ? $companybranch->bill_to_fax : ''}}">

            {!! $errors->first('bill_to_fax', '<span class="control-error">:message</span>') !!}
        </div>
        <div class="control-group {{ $errors->has('bill_to_city') ? 'has-error' : ''}}">
            <label for="bill_to_city" class="">{{ __('organization::app.companybranch.fields.bill_to_city') }}</label>

            <input class="control" name="bill_to_city" type="text" id="bill_to_city"
                   value="{{ isset($companybranch->bill_to_city) ? $companybranch->bill_to_city : ''}}">

            {!! $errors->first('bill_to_city', '<span class="control-error">:message</span>') !!}
        </div>
        <div class="control-group {{ $errors->has('bill_to_country') ? 'has-error' : ''}}">
            <label for="bill_to_country"
                   class="">{{ __('organization::app.companybranch.fields.bill_to_country') }}</label>

            <input class="control" name="bill_to_country" type="text" id="bill_to_country"
                   value="{{ isset($companybranch->bill_to_country) ? $companybranch->bill_to_country : ''}}">

            {!! $errors->first('bill_to_country', '<span class="control-error">:message</span>') !!}
        </div>


    </div>
</accordian>
