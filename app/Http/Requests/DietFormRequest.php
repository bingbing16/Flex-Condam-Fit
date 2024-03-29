<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DietFormRequest extends FormRequest
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
            'name' => [
                'required',
                'string'
            ],
            'bfast' => [
                'required',
            ],
            'lunch' => [
                'required',
            ],
            'snack' => [
                'required',
            ],
            'dinner' => [
                'required',
            ],
            'midsnack' => [
                'required',
            ],
            'totalcalories' => [
                'required',
                'string'
            ],
            'image' => [
                'nullable',
                'mimes:jpg,jpeg,png,gif'
            ],
            'category_id' => [
                'required',
                'integer'
            ],
        ];
    }
}
