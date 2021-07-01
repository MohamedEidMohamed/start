<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Offerrequest extends FormRequest
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
        return [
            'name_ar'=>'required | max:100 | unique:offers,name_ar',
                'name_en'=>'required | max:100 | unique:offers,name_en',
                'price'=>'required',
                'quality'=>'required|numeric'
        ];
    }

    public function message()
    {
        return [
            'name.required'=>'laz, tktb al name y sa7bi',
            'name.unique'=>__('messages.offers form unique')
        ];
    }
}
