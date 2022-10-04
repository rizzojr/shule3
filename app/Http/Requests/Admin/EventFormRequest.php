<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EventFormRequest extends FormRequest
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

            'name' => [
                'required',
                'string',
                'max:200'
            ],


            'start_time' => [
                'required'
            ],
            'end_time' => [
                'required'
            ],
            'date' => [
                'required'
            ],
            'description' => [
                'required'
            ],
            'image' =>[
                'nullable',
                'image'

            ],

            'location' =>[
                'required'

            ],

            'month' =>[
                'required'

            ],


        ];

        return $rules;
    }
}
