<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfoStoreRequest extends FormRequest
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
            'title' => 'required|min:5|max:30',
            'description' => 'required',
            'icon' => 'required|mimes:png,jpg|max:2048'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Sarvlavha bo`lishi shart !',
            'title.min' => 'Eng kamida 5 ta belgi bo`lishi kerak !',
            'icon.mimes' => 'Rasm png yoki jpg formatida kiritilsin'
        ];
    }
}
