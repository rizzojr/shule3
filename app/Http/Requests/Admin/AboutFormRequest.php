<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AboutFormRequest extends FormRequest
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

            'image_cover_one' => [
                'image',
                'required'


            ],

            'image_cover_two' => [
                'image',
                'required'
            ],

            'image_cover_three' => [
                'image',
                'required'
            ],
            'who_we_are' =>[
                'nullable',


            ],

            'what_we_do' =>[
                'nullable',


            ],
            'why_you_join' =>[
                'nullable',


            ],

            'what_our_goal' =>[
                'nullable',


            ],



        ];

        return $rules;
    }
}
