<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompetitionRequest extends FormRequest
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
            'competition_name'=>'required|string|max:255',
            'organization_host'=>'required|string|max:255',
            'theme'=>'required|string|max:255',
            'competition_description'=>'required|string|max:255',
            'requirements'=>'required|string|max:255',
            'registration_link'=>'required|string|max:255',
            'venue'=>'required|string|max:255',
            'date'=>'required|string|max:255',
            'competition_mode'=>'required|string|max:255',
            'prize_details'=>'required|string|max:255',
            'date_submission'=>'required|string|max:255',
            'image_path'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
