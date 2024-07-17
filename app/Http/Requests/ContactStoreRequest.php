<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'max:20', 'min:2'],
            'email' => ['required', 'email']
        ];
    }

    function messages() {
        return [
            'name.required' => 'Hey please fill the name field',
            'name.max' => 'the max length of name have to be 20',
            'name.min' => 'the min length of name have to be 2',
            'email.required' => 'Hey email is required'
        ];
    }
}
