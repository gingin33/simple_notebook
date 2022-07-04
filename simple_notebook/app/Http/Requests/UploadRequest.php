<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->path() == 'upload'){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required | max:50',
            'texts' => 'required | max:400',
        ];
    }
    public function messages(){
        return [
            'title.required' => 'タイトルは必ず入力してください.',
            'title.max' => 'タイトルは50文字以内にしてください.',
            'texts.required' => '本文は必ず入力してください.',
            'texts.max' => '本文は400文字以内にしてください.',
        ];
    }
}
