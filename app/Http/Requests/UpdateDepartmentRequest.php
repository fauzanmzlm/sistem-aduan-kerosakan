<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDepartmentRequest extends FormRequest
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
            'name' => 'required|unique:departments,name,' . $this->department->id,
            'short_name' => 'required|unique:departments,short_name,' . $this->department->id,
            'code' => 'required|unique:departments,code,' . $this->department->id,
            'status' => 'required'
        ];
    }
}
