<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStore extends FormRequest
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
            'name'=>'required|min:4|max:70',
            'email'=>'required|email',
            'password'=>'required|min:4|max:70',
            'role_id'=>'required',
            'job'=>'required|min:4|max:70',
            'image'=>'required|image',
           


        ];
    }
}
