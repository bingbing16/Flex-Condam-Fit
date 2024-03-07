<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingFormRequest extends FormRequest
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
            'name' =>[
                'required',
                'string'
            ],
            'short_name' =>[
                'required',
                'string'
            ],
            'welcome' =>[
                'required',
            ],
            'about_us' =>[
                'required',
            ],
            'logo' =>[
                'nullable',
                'mimes:jpg,jpeg,png,gif'
            ],
            'cover' =>[
                'nullable',
                'mimes:jpg,jpeg,png,gif'
            ],
        ];
    }
}
