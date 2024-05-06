<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'password'=>'required',
            'role'=>'required',
        ];
    }

    public function messages(){
        return[
            'name.required'=>'Need to fill name',
            'email.required'=>'Need to fill email',
            'phone.required'=>'Need to fill phone',
            'address.required'=>'Need to fill address',
            'password.required'=>'Need to fill password',
            'role.required'=>'Need to select role',
        ];
    }
}
