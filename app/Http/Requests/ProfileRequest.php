<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Session;

class ProfileRequest extends FormRequest
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
    public function rules(Request $request)
    {
       
        return [
            'email' => 'required|email',
            'password' => 'confirmed',
            'image' => 'image|Max:5242880',
            'phone' => ['regex:/^(?:0(?!(5|7))(?:2|3|4|8|9))(?:-?\d){7}$|^(0(?=5|7)(?:-?\d){9})$/'],
            'name' => 'required',
        ];
    }

    public function messages(){

        return[
        'email.required' => 'email is required message. אפשרי להחליף!!',
        ];

    }
}
