<?php

namespace DOCore\Organization\Http\Requests;

use DOCore\Organization\Models\Bank;
use Illuminate\Foundation\Http\FormRequest;

class BankRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return Bank::$rules;
    }
}
