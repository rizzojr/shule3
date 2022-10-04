<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CozFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
       $rules = [

            'instructor_name' => [
                'required'


            ],



            'description' => [
                'required'
            ],
            'cost' => [
                'required'
            ],
            'image_cover' =>[
                'nullable',
                'image'

            ],

            'image_instructor' =>[
                'nullable',
                'image'

            ],



        ];

        return $rules;
    }
}
