<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreleaveRequestRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'leave_type_id' => 'required|exists:leave_types,id',
            'start_date' => 'required',
            'end_date' => 'required',
            'reason' => 'required',
        ];
    }
}
