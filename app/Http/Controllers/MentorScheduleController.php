<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Mentor_Schedule;
use App\Models\MentorSchedule;
use App\Http\Requests\SchedulingRequest;
use App\Models\Scheduling;


class MentorScheduleController extends Controller
{
    public function viewschedule()
    {
        return MentorSchedule::all();
    }

    public function viewschedulementor($id)
    {
        $mentorschedule = MentorSchedule::where('mentor_id', $id)
                                         ->whereNotNull('time')
                                         ->get();
        return $mentorschedule;
    }
    
    public function addmentordate(Mentor_Schedule $request)
    {
        $validated = $request->validated();
        $mentor_schedule = MentorSchedule::create($validated);
        return $mentor_schedule;
    }

    public function createschedule(SchedulingRequest $request)
    {
        $validated = $request->validated();
        $scheduling = Scheduling::create($validated);
        return $scheduling;
    }

    public function viewteamschedule($team_id)
    {
        $scheduling = Scheduling::where('team_id', $team_id)->get();
        return $scheduling;
    }
    

    public function viewedteamschedule($mentor_id)
{
    $scheduling = Scheduling::where('mentor_id', $mentor_id)
                             ->where('viewed', 'no')
                             ->get();
    return $scheduling;
}

    public function viewmentorevent($mentor_id)
    {
        $scheduling = Scheduling::where('mentor_id', $mentor_id)->get();
        return $scheduling;
    }

    public function updatementorevent(SchedulingRequest $request, string $scheduling_id)
    {
        $validated = $request->validated();

        $scheduling = Scheduling::findOrFail($scheduling_id);

        $scheduling-> update($validated);
                    

        return $scheduling;
    }
    public function updateMentorDate(Mentor_Schedule $request, string $mentor_id, string $date)
    {
        $validated = $request->validated();
    
        // Find the MentorSchedule record for the given mentor_id and date
        $mentorschedule = MentorSchedule::where('mentor_id', $mentor_id)
                                        ->where('date', $date)
                                        ->firstOrFail();
    
        // Update the MentorSchedule record with the validated data
        $mentorschedule->update($validated);
    
        return $mentorschedule;
    }
    

}
