<?php

namespace App\Http\Requests\MailBox;

use Illuminate\Foundation\Http\FormRequest;

class RequestTypeRequest extends FormRequest
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
            'name' => ['required','max:255','unique:request_types,name'],
            'type' => ['nullable','string'],
        ];
    }
}
