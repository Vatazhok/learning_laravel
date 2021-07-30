<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreAndUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'required|min:5|max:200',
            'slug'=>'required|unique:posts|min:5|max:200',
            'cover'=>'required|min:5|max:200',
            'text'=>'required|min:3|max:44000',
            'date'=>'required|date',
            'venue'=>'required|min:5|max:200',
            'price'=>'required|min:1|max:10',
            'settlement'=>'required|min:5|max:200',
        ];
    }
}
