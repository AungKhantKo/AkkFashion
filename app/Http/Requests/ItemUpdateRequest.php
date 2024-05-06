<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemUpdateRequest extends FormRequest
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
            'codeNo' => 'required', //codeNo htl mhr yail htr tk hrr twi ka form field htl ka name tag htl ka name twi
            'name' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'inStock' => 'required',
            'category_id' => 'required',
            'description' => 'required',
        ];
    }
}
