<?php

namespace App\Http\Requests\MailBox;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ReplayBoxRequest extends FormRequest
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
            'request_id'=>['required',//'exists:request_boxes,id'
            Rule::exists('request_boxes', 'id')->where(function ($query) {
                $query->where('send_id', auth()->user()->id)
                    ->orWhere('recived_id', auth()->user()->id);
            }),
        ],
            'title' => ['required','max:255'],
            'sub_title' => ['nullable','string'],
            'file_ids' => 'nullable|array|max:10', // Example validation rules for up to 10 files
            'file_ids.*' => ['exists:files,id'],
        ];
    }
}
