<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertPlayerRequest extends FormRequest
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
        return [
            'FirstName' => ['required', 'string', 'max:25'],
            'LastName' => ['required', 'string', 'max:25'],
            'Status' => ['required', 'string', 'max:25'],
            'team_id' => ['required', 'integer', 'min:0'],
            'Position' => ['required', 'string', 'max:3'],
            'Height' => ['required', 'integer', 'min:0'],
            'Weight' => ['required', 'integer', 'min:0'],
            'BirthDay' => ['required', 'string', 'max:10'],
        ];
    }
}
