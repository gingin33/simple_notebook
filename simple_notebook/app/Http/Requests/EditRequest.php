<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->path() == 'edit'){
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
            'mail' => 'required | email',
            'pass' => 'required | min:8',
            'passCheck' => 'min:8 | same:pass',
        ];
    }
    public function messages(){
        return [
            'user.required' => '名前は必ず入力してください.',
            'mail.email' => 'メールアドレスを入力してください.',
            'mail.unique' => 'このメールアドレスは既に登録されています.',
            'pass.min' => 'パスワードは8文字以上にしてください.',
            'passCheck.min' => 'パスワードは8文字以上にしてください.',
            'passCheck.same' => 'パスワードが一致しません.'
        ];
    }
}
