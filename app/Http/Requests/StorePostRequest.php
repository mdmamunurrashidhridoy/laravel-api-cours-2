<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=> 'required|string|max:255|min:3',
            'body'=> 'required|string|min:15'
        ];
    }

    public function messages(){
        return [
            'title.required' => 'title is required',
            'title.string'=> 'title must be string',
            'title.max'=> 'title must be less than :max characters',
            'title.min'=> 'title must be at least :min characters',
            'body.required'=> 'body is required',
            'body.string'=> 'body must be string',
            'body.min'=> 'body must be at least :min characters',
        ];
    }
}
