<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CategoryRequest extends FormRequest
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
    public function rules(Request $request){

        $ignore = !empty($request['item_id']) ? ',' . $request['item_id'] : '';
        return [
            'title' => 'required|min:3|max:50',
            'url' => 'required|min:2|max:80|regex:/^[a-z\d-]+$/|unique:categories,url' . $ignore,
            'description' => 'required|min:3',
            'image' => 'image|Max:5242880',
        ];

    }
}
