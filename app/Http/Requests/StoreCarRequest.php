<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
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
            'name' => 'required',
            'colour' => 'required',
            //'attachment' => 'required|mimes:jpg,pdf,png'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Sila isi nama kereta',
            'colour.required' => 'Sila isi warna kereta',
            // 'title.min' => 'Tak cukup panjang :min',
            // 'description.required' => 'Sila isi deskripsi',
        ];
    }
}
