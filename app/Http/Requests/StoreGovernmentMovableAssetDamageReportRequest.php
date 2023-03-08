<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGovernmentMovableAssetDamageReportRequest extends FormRequest
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
            'complainant_name' => 'required',
            'complainant_department' => 'required',
            'location' => 'required',
            'complaint_date' => 'required',
            'complainant_signature' => 'required',
            'equipment_damage_details' => 'required',
        ];
    }
}
