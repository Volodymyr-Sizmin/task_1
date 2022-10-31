<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|min:2|max:50',
            'email' => 'required|email|min:5',
            'message' => 'required|min:5'
        ];
    }

    public function messages()
    {
        return array_merge(parent::messages(),[

            'email.min' => 'There must be at least five characters in your email'
            ]);
    }
}
