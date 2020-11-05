<accordian :title="'{{ __('organization::app.group.general') }}'" :active="true">
    <div slot="body">


        <div class="row">
            <div class="control-group col-6{{ $errors->has('group_desc') ? 'has-error' : ''}}">
                <label for="group_desc"
                       class="required">{{ __('organization::app.group.fields.group_desc') }}</label>

                <input class="control" name="group_desc" type="text" id="group_desc"
                       value="{{ isset($group->group_desc) ? $group->group_desc : ''}}" required>

                {!! $errors->first('group_desc', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col-6 {{ $errors->has('account_code') ? 'has-error' : ''}}">
                <label for="account_code" class="">{{ __('organization::app.group.fields.account_code') }}</label>

                <input class="control" name="account_code" type="text" id="account_code"
                       value="{{ isset($group->account_code) ? $group->account_code : ''}}">

                {!! $errors->first('account_code', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
        <div class="row">
            <div class="control-group col-6 {{ $errors->has('company_id') ? 'has-error' : ''}}">
                <label for="company_id"
                       class="required">{{ __('organization::app.group.fields.company_id') }}</label>

                <select id="company_id" name="company_id" class="form-control control" data-role="control">
                    @foreach($company as $item)
                        <option value="{{ $item->company_id }}" {{$group->company_id == $item->company_id ? 'selected' : '' }}>{{ $item->description }}</option>
                    @endforeach
                </select>
                {!! $errors->first('company_id', '<span class="control-error">:message</span>') !!}
            </div>

            <div class="control-group col col-6 {{ $errors->has('status') ? 'has-error' : ''}}">
                <label for="status" class="">{{ __('organization::app.group.fields.status') }}</label>
                <select id="status" name="status" class="form-control control" data-role="control">
                    <option value="0" {{$group->status == 0 ? 'selected' : '' }}>
                        {{__('organization::app.status.Inactive')}}</option>
                    <option value="1" {{$group->status ==1 ? 'selected' : '' }}>
                        {{__('organization::app.status.Active')}}
                    </option>
                </select>
                {!! $errors->first('status', '<span class="control-error">:message</span>') !!}
            </div>

        </div>

        <div class="row">
            <div class="control-group col-6 {{ $errors->has('amend_by') ? 'has-error' : ''}}">
                <label for="amend_by" class="">{{ __('organization::app.group.fields.amend_by') }}</label>

                <input class="control" name="amend_by" type="text" id="amend_by"
                       value="{{ isset($group->amend_by) ? $group->amend_by : ''}}">

                {!! $errors->first('amend_by', '<span class="control-error">:message</span>') !!}
            </div>
            <div class="control-group col-6 {{ $errors->has('amend_date') ? 'has-error' : ''}}">
                <label for="amend_date" class="">{{ __('organization::app.group.fields.amend_date') }}</label>

                <input class="control" name="amend_date" type="datetime-local" id="amend_date"
                       value="{{ isset($group->amend_date) ? $group->amend_date : ''}}">

                {!! $errors->first('amend_date', '<span class="control-error">:message</span>') !!}
            </div>
        </div>

        <div class="row">
            <div class="control-group col col-6 {{ $errors->has('model_name') ? 'has-error' : ''}}">
                <label for="model_name" class="">{{ __('organization::app.group.fields.model_name') }}</label>
                <select id="model_name" name="model_name" class="form-control control" data-role="control">
                    <option value="{{__('organization::app.group.supplier')}}" {{$group->model_name == 'Supplier' ? 'selected' : '' }}>{{__('organization::app.group.supplier')}}</option>
                    <option value="{{__('organization::app.group.client')}}" {{$group->model_name =='Client' ? 'selected' : '' }}>{{__('organization::app.group.client')}}</option>
                    <option value="{{__('organization::app.group.employ')}}" {{$group->model_name =='Employ' ? 'selected' : '' }}>{{__('organization::app.group.employ')}}</option>
                    <option value="{{__('organization::app.group.bank')}}" {{$group->model_name =='Bank' ? 'selected' : '' }}>{{__('organization::app.group.bank')}}</option>
                    <option value="{{__('organization::app.group.store')}}" {{$group->model_name =='Store' ? 'selected' : '' }}>{{__('organization::app.group.store')}}</option>
                    <option value="{{__('organization::app.group.treasure')}}" {{$group->model_name =='Treasure' ? 'selected' : '' }}>{{__('organization::app.group.treasure')}}</option>
                </select>
                {!! $errors->first('model_name', '<span class="control-error">:message</span>') !!}
            </div>
        </div>
    </div>
</accordian>
