<accordian :title="'{{ __('organization::app.suppliergroup.general') }}'" :active="true">
    <div slot="body">

      <div class="control-group {{ $errors->has('company_id') ? 'has-error' : ''}}">
        <label for="company_id" class="required">{{ __('organization::app.suppliergroup.fields.company_id') }}</label>

        <input class="control" name="company_id" type="number" id="company_id" value="{{ isset($suppliergroup->company_id) ? $suppliergroup->company_id : ''}}" required>

          {!! $errors->first('company_id', '<span class="control-error">:message</span>') !!}
      </div>
      <div class="control-group {{ $errors->has('group_desc') ? 'has-error' : ''}}">
        <label for="group_desc" class="required">{{ __('organization::app.suppliergroup.fields.group_desc') }}</label>

        <input class="control" name="group_desc" type="text" id="group_desc" value="{{ isset($suppliergroup->group_desc) ? $suppliergroup->group_desc : ''}}" required>

          {!! $errors->first('group_desc', '<span class="control-error">:message</span>') !!}
      </div>
      <div class="control-group {{ $errors->has('account_code') ? 'has-error' : ''}}">
        <label for="account_code" class="">{{ __('organization::app.suppliergroup.fields.account_code') }}</label>

        <input class="control" name="account_code" type="text" id="account_code" value="{{ isset($suppliergroup->account_code) ? $suppliergroup->account_code : ''}}" >

          {!! $errors->first('account_code', '<span class="control-error">:message</span>') !!}
      </div>
      <div class="control-group {{ $errors->has('status') ? 'has-error' : ''}}">
        <label for="status" class="">{{ __('organization::app.suppliergroup.fields.status') }}</label>

        <input class="control" name="status" type="text" id="status" value="{{ isset($suppliergroup->status) ? $suppliergroup->status : ''}}" >

          {!! $errors->first('status', '<span class="control-error">:message</span>') !!}
      </div>
      <div class="control-group {{ $errors->has('amend_by') ? 'has-error' : ''}}">
        <label for="amend_by" class="">{{ __('organization::app.suppliergroup.fields.amend_by') }}</label>

        <input class="control" name="amend_by" type="text" id="amend_by" value="{{ isset($suppliergroup->amend_by) ? $suppliergroup->amend_by : ''}}" >

          {!! $errors->first('amend_by', '<span class="control-error">:message</span>') !!}
      </div>
      <div class="control-group {{ $errors->has('amend_date') ? 'has-error' : ''}}">
        <label for="amend_date" class="">{{ __('organization::app.suppliergroup.fields.amend_date') }}</label>

        <input class="control" name="amend_date" type="datetime-local" id="amend_date" value="{{ isset($suppliergroup->amend_date) ? $suppliergroup->amend_date : ''}}" >

          {!! $errors->first('amend_date', '<span class="control-error">:message</span>') !!}
      </div>


    </div>
</accordian>
