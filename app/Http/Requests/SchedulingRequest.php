<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SchedulingRequest extends FormRequest
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
            'team_id'=>'required|int|max:255',
            'mentor_id'=>'required|int|max:255',
            'date'=>'required|string|max:255',
            'time'=>'required|string|max:255',
            'status'=>'nullable|string|max:255',
            'viewed'=>'nullable|string|max:255',
            'remarks'=>'nullable|string|max:255',
        ];
    }
}
