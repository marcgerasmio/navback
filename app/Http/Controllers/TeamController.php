<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TeamRequest;
use App\Http\Requests\MemberRequest;
use App\Http\Requests\TBIRequest;
use App\Models\TBI;
use App\Models\Team;
use App\Models\Member;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all()->map(function ($team) {
            $team['logo_path'] = str_replace('public/', '', $team['logo_path']);
            return $team;
        });
    
        return $teams;
    }
    
    
    public function store(TeamRequest $request)
    {
        $logoPath = null;
        if ($request->hasFile('logo_path')) {
            $logoPath = $request->file('logo_path')->store('public');
        }
    
        // Generate URL for the stored image
        $logoUrl = $logoPath ? Storage::url($logoPath) : null;
        
        // Create a new team
        $team = new Team();
        $team->team_name = $request->input('team_name');
        $team->product_details = $request->input('product_details');
        $team->team_ceo = $request->input('team_ceo');
        $team->tbi_id = $request->input('tbi_id');
        $team->logo_path = $logoPath;
        $team->save();
    
        return response()->json(['message' => 'Team Added Successfully'], 201);
    }
    

    public function show($team_id)
    {$teams = Team::where('team_id', $team_id)->get()->map(function ($team) {
        $team['logo_path'] = str_replace('public/', '', $team['logo_path']);
        return $team;
    });
    
    return $teams;
    }

    public function showceo($team_ceo)
    {$teams = Team::where('team_ceo', $team_ceo)->get()->map(function ($team) {
        $team['logo_path'] = str_replace('public/', '', $team['logo_path']);
        return $team;
    });
    
    return $teams;
    }


    public function storemember(MemberRequest $request)
{
    $logoPath = $request->file('image_path') ? $request->file('image_path')->store('public') : null;

    // Generate URL for the stored image if available
    $logoUrl = $logoPath ? Storage::url($logoPath) : null;

    // Create a new team
    $member = new Member();
    $member->member_name = $request->input('member_name');
    $member->team_id = $request->input('team_id');
    $member->email = $request->input('email');
    $member->role = $request->input('role');
    $member->image_path = $logoPath;
    $member->save();

    return response()->json(['message' => 'Member Added successfully'], 201);
}
public function updatemember(MemberRequest $request, $member_id)
{
    try {
        $member = Member::findOrFail($member_id);

        // Update member details
        $member->member_name = $request->input('member_name');
        $member->email = $request->input('email');
        $member->role = $request->input('role');

        // Check if image is provided
        if ($request->hasFile('image_path')) {
            // Store the new image
            $imagePath = $request->file('image_path')->store('public');

            // Update member's image path
            $member->image_path = $imagePath;
        }

        // Save the updated member details
        $member->save();

        return response()->json(['message' => 'Member updated successfully'], 200);
    } catch (\Exception $e) {
        // Handle exception
        return response()->json(['message' => 'Failed to update member', 'error' => $e->getMessage()], 500);
    }
} public function showmembers($team_id)
    {$member = Member::where('team_id', $team_id)->get()->map(function ($member) {
        $member['image_path'] = str_replace('public/', '', $member['image_path']);
        return $member;
    });
    
    return $member;
    }

    public function addtbi(TBIRequest $request)
    {
        $logoPath = $request->file('tbi_logo') ? $request->file('tbi_logo')->store('public') : null;
    
        // Generate URL for the stored image if available
        $logoUrl = $logoPath ? Storage::url($logoPath) : null;
    
        // Create a new team
        $tbi = new TBI();
        $tbi->tbi_name = $request->input('tbi_name');
        $tbi->tbi_logo = $logoPath;
        $tbi->save();
    
        return response()->json(['message' => 'TBI Added successfully'], 201);
    }
    public function viewtbi()
    {
        $tbi = TBI::all()->map(function ($tbi) {
            $tbi['tbi_logo'] = str_replace('public/', '', $tbi['tbi_logo']);
            return $tbi;
        });
    
        return $tbi;
    }
    


}
