<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveStudentRequest extends FormRequest
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
        if ($this->isMethod('patch') || $this->isMethod('put')) {
            $photoRule ='nullable|image';
        } else {
            $photoRule ='required|image';
        }
        return [
            'first_name' => 'required|string|max:60',
            'last_name' => 'required|string|max:60',
            'gender' => 'required|in:Male,Female,Other',
            'address' => 'nullable|string|max:500',
            'photo' => $photoRule,
        ];
    }
}
