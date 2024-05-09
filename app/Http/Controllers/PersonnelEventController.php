<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CompetitionRequest;
use App\Models\Competition;
use App\Http\Requests\SeedFundingRequest;
use App\Models\SeedFunding;
use Illuminate\Support\Facades\Storage;

class PersonnelEventController extends Controller
{
    public function addcompetition(CompetitionRequest $request)
    {
        $imagePath = null;
        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('public');
        }
        $imageUrl = $imagePath ? Storage::url($imagePath) : null;
        $competition = new Competition();
        $competition->organization_host = $request->input('organization_host');
        $competition->competition_name = $request->input('competition_name');
        $competition->theme = $request->input('theme');
        $competition->competition_description = $request->input('competition_description');
        $competition->requirements = $request->input('requirements');
        $competition->registration_link = $request->input('registration_link');
        $competition->venue = $request->input('venue');
        $competition->date = $request->input('date');
        $competition->competition_mode = $request->input('competition_mode');
        $competition->prize_details = $request->input('prize_details');
        $competition->date_submission = $request->input('date_submission');
        $competition->image_path = $imagePath;
        $competition->save();
    
        return response()->json(['message' => 'Competition Added Successfully'], 201);
    }
    public function addseedfunding(SeedFundingRequest $request)
    {
        $validated = $request->validated();
        $seedfunding = SeedFunding::create($validated);
        return $seedfunding;
    }

    public function indexcompetition()
    {
        $competition = Competition::all()->map(function ($competition) {
            $competition['image_path'] = str_replace('public/', '', $competition['image_path']);
            return $competition;
        });
    
        return $competition;
    }
    public function indexseedfunding()
    {
        return SeedFunding::all();
    }

}
