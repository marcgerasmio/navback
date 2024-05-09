<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeedFundingRequest extends FormRequest
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
            'funding_agency'=>'required|string|max:255',
            'grant_name'=>'required|string|max:255',
            'budget_allocated'=>'required|string|max:255',
            'funding_priorities'=>'required|string|max:255',
            'funding_description'=>'required|string|max:255',
            'requirements'=>'required|string|max:255',
            'submission_link'=>'required|string|max:255',
            'deadline'=>'required|string|max:255',
        ];
    }
}
