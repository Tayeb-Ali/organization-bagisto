<div class="control-group {{ $errors->has('company_id') ? 'has-error' : ''}}">
    <label for="company_id" class="required">{{ __('organization::app.employ.fields.company_id') }}</label>

    <select id="company_id" name="company_id" class="form-control control" data-role="control">

        @foreach($company as $item)
            <option value="{{ $item->company_id }}" {{$employ->company_id == $item->company_id ? 'selected' : '' }}>{{ $item->description }}</option>
        @endforeach
    </select>
    {!! $errors->first('company_id', '<span class="control-error">:message</span>') !!}
</div>
