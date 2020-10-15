<accordian :title="'{{ __('organization::app.company.general') }}'" :active="true">
    <div slot="body">


        <div class="control-group {{ $errors->has('company_id') ? 'has-error' : ''}}">
            <label for="company_id"
                   class="required">{{ __('organization::app.company.sub-company.company_parent_id') }}</label>

            <select id="company_parent_id" name="company_parent_id" class="form-control" data-role="control">
                @foreach($companys as $item)
                    <option value="{{ $item->company_id }}" {{$company->company_parent_id == $item->company_id ? 'selected' : '' }}>{{ $item->description }}</option>
                @endforeach
            </select>
            {!! $errors->first('company_parent_id', '<span class="control-error">:message</span>') !!}
        </div>

    </div>
</accordian>
