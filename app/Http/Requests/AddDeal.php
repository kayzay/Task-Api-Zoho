<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddDeal extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return !false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'deal_name' => 'required|string|max:200',
            'contact' => 'required|int',
            'amount' => 'required|regex:/^\d*(\.\d{2})?$/',
            'type' => 'required|string|max:200',
            'next_step' => 'required|string|max:200',
            'stage' => 'required|string|max:200',
            'lead_source' => 'required|string|max:200',
            'closing_date' => 'required|string',
            'description' => 'required|string',
        ];
    }
}
