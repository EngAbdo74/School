<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClassesRequest extends FormRequest
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
            'List_Classes.*.name_class_ar' => 'required',
            'List_Classes.*.name_class_en' => 'required',
            'List_Classes.*.grade_id' => 'required' ,

        ];
    }

    public function messages()
   {
    return [

        'name_class_ar.required' => __('validation.required') ,
        'name_class_en.required' => __('validation.required') ,
        'grade_id.required' => __('validation.required') ,
    ];
 }
}
