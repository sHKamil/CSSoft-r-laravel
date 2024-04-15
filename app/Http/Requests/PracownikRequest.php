<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PracownikRequest extends FormRequest
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
            'id_firmy' => 'nullable',
            'imie' => 'required|max:50',
            'nazwisko' => 'required|max:50',
            'telefon' => 'nullable|min:9|max:20',
            'email' => 'nullable|max:100',
            'opis' => 'nullable|max:1000',
        ];
    }
}
