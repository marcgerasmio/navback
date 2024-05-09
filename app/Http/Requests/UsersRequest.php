<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
        if (request()->routeIs('user.login')){
        return [
            'email'=>'required|string|email|max:255',
            'password'=>'required|min:5',       
        ];
    
    }
        return [
            'role_id'=>'required|int|max:255',
            'name'=>'required|string|max:255',
            'email'=>'required|string|max:255',
            'password'=>'required|string|max:255',
            'phone_number'=>'required|string|max:255',
            'course_year'=>'required|string|max:255',
        ];
    }
}
