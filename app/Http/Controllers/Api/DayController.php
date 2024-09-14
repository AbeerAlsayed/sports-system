<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use Illuminate\Http\Request;

class DayController extends Controller
{
    public function index()
    {
        return Schedule::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'day_name' => 'required|string',
            'session_num' => 'required|integer',
            'scheduling_id' => 'required|integer',
        ]);

        return Schedule::create($request->all());
    }

    public function show(Schedule $schedule)
    {
        return $schedule;
    }

    public function update(Request $request, Schedule $schedule)
    {
        $request->validate([
            'day_name' => 'sometimes|required|string',
            'session_num' => 'sometimes|required|integer',
            'scheduling_id' => 'sometimes|required|integer',
        ]);

        $schedule->update($request->all());

        return $schedule;
    }

    public function destroy(Schedule $schedule)
    {
        $schedule->delete();

        return response()->noContent();
    }
}
