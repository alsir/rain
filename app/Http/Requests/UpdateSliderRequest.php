<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSliderRequest extends FormRequest
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
            'ad_1_825' => 'mimes:jpg,bmp,png|max:2048',
            'heading_1' => 'required|max:255|string',
            'sub_heading_1' => 'required|max:255|string',
            'description_1' => 'required|max:255|string',
            'ad_2_825' => 'mimes:jpg,bmp,png|max:2048',
            'heading_2' => 'required|max:255|string',
            'sub_heading_2' => 'required|max:255|string',
            'description_2' => 'required|max:255|string',
            'ad_3_825' => 'mimes:jpg,bmp,png|max:2048',
            'heading_3' => 'required|max:255|string',
            'sub_heading_3' => 'required|max:255|string',
            'description_3' => 'required|max:255|string',
        ];
    }
}
