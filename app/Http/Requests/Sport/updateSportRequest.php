<?php

namespace App\Http\Requests\Sport;

use Illuminate\Foundation\Http\FormRequest;

class updateSportRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'user_id' => 'required|exists:users,id',
            'facility_id' => 'required|exists:facilities,id',
        ];
    }
}
