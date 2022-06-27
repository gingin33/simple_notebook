<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SimpleNoteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->path() == 'register'){
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
            'user' => 'required',
            'pass' => 'min:8',
            'passCheck' => 'min:8 | same:pass',
        ];
    }

    public function messages(){
        return [
            'user.required' => '名前は必ず入力してください.',
            'pass.min' => 'パスワードは8文字以上にしてください.',
            'passCheck.min' => 'パスワードは8文字以上にしてください.',
            'passCheck.same' => 'パスワードは一致させてください.'
        ];
    }
}
