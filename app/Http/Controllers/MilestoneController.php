<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MilestoneRequest;
use App\Http\Requests\SubmissionRequest;
use App\Http\Requests\TopicRequest;
use App\Models\Milestone;
use App\Models\Topic;
use App\Models\Submission;

class MilestoneController extends Controller
{
    public function viewmilestone()
    {
        return Milestone::all();
    }
    public function viewtopic()
    {
        return Topic::all();
    }

    public function displaytopic($milestone_id)
    {
        $topic = Topic::where('milestone_id', $milestone_id)->get();
        return $topic;
    }
    public function createsubmission(SubmissionRequest $request)
    {
        $validated = $request->validated();
        $submission = Submission::create($validated);
        return $submission;
    }
    public function createtopic(TopicRequest $request)
    {
        $validated = $request->validated();
        $topic = Topic::create($validated);
        return $topic;
    }

    public function displaysubmission($team_id)
    {
        $submission = Submission::where('team_id', $team_id)->get();
        return $submission;
    }

    public function viewteamsubmission($team_id, $milestone_id)
{
    // You can use $team_id and $milestone_id directly here
    // Fetch submissions based on $team_id and $milestone_id
    $submissions = Submission::where('team_id', $team_id)
                             ->where('milestone_id', $milestone_id)
                             ->get();

    // Return the fetched submissions
   return $submissions;
}

    public function updatesubmission(SubmissionRequest $request, string $submission_id)
    {
        $validated = $request->validated();

        $submission = Submission::findOrFail($submission_id);

        $submission-> update($validated);
                    

        return $submission;
    }
}
