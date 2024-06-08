<?php

namespace App\Http\Controllers;


use App\Http\Requests\MentorRequest;
use App\Models\User;
use App\Http\Requests\UsersRequest;
use App\Http\Requests\PersonnelRequest;
use App\Http\Requests\AdminRequest;
use App\Models\Personnel;
use App\Models\Mentor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;


class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }
    public function login(UsersRequest $request)
    {
        $user = User::where('email', $request->email)->first();
     
        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        $response = [
            'user'  =>  $user
        ];
     
        return $response;
        
    }

    public function registeradmin(AdminRequest $request)
    {
        $validated = $request->validated();
        $user = User::create($validated);
        return $user;
    }
  
    public function registerceo(UsersRequest $request)
    {
        $validated = $request->validated();
        $user = User::create($validated);
        return $user;
    }

    public function registermentor(MentorRequest $request)
    {
        $validated = $request->validated();
        $user = User::create($validated);
        return $user;
    }

    public function registerpersonnel(PersonnelRequest $request)
    {
        $validated = $request->validated();
        $user = User::create($validated);
        return $user;
    }


    public function updatepersonnel(PersonnelRequest $request, string $id)
    {
        $validated = $request->validated();

        $personnel = Personnel::findOrFail($id);

        $personnel-> update($validated);
                    

        return $personnel;
    }
    public function updatementor(MentorRequest $request, string $id)
    {
        $validated = $request->validated();

        $mentor = Mentor::findOrFail($id);

        $mentor-> update($validated);
                    

        return $mentor;
    }

    public function showpersonnel($id)
    {
        $personnel = Personnel::where('id', $id)->get();
        return $personnel;
    }

    public function fetchmentor($id)
    {
        $mentors = Mentor::where('id', $id)->get();
        return $mentors;
    }

    public function showmentor()
    {
        $mentors = Mentor::where('role_id', 2)->get();
        return $mentors;
    }
    
    
    
}
