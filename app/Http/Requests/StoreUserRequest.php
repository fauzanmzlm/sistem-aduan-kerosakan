<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username' => [
                'required',
                'string',
                'max:255',
                'regex:/^\S*$/u',
                'unique:users,username,' . $this->user()->id,
            ],
            'identity_card_number' => [
                'required',
                'numeric',
                'digits:12',
                // 'unique:users,ic_number'
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:users,email',
                'regex:/gmail/'
            ],
            'department' => [
                'required',
                'exists:departments,id'
            ],
            'first_name' => [
                'required',
                'string',
                'max:255',
            ],
            'last_name' => [
                'required',
                'string',
                'max:255',
            ]
        ];
    }
}
