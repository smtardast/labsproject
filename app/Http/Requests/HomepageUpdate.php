<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomepageUpdate extends FormRequest
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
            'subtitle'=>'required|min:4|max:70',
            'descriptiontitle'=>'required|min:4|max:70',
            'description'=>'required|min:4|max:300',
            'description2'=>'required|min:4|max:300',
            'clienttitle'=>'required|min:4|max:70',
            'servicetitle'=>'required|min:4|max:70',
            'teamtitle'=>'required|min:4|max:70',
            'browsetitle'=>'required|min:4|max:70',
            'browsesubtitle'=>'required|min:4|max:300',
            'video'=>'required|min:4|max:200',
            

        ];
    }
}
