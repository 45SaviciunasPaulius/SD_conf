<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateConferenceRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:255'],
            'date' => ['required', 'date'],
            'location' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'lectors' => ['required', 'string', 'max:500']
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Conference title is required.',
            'date.required' => 'Conference date is required.',
            'location.required' => 'Conference location is required.',
            'description.required' => 'Conference description is required.',
            'lectors.required' => 'Conference lectors are required.'
        ];
    }
}