<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddContact extends FormRequest
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
            'first_name' => 'required|string|max:200',
            'last_name' => 'required|string|max:200',
            'company' => 'required|string|max:200',
            'email' => 'required|string|regex: /^[0-9a-zA-Z\\.\\-\\_]{1,}\\@[0-9a-zA-Z\\-\\_\\.]{1,}\\.[a-zA-Z]{2,256}$/',
            'state' => 'required|string|max:200',
        ];
    }
}
