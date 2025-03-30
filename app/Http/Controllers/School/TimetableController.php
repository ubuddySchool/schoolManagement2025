<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TimetableController extends Controller
{
    public function timetable(){
        return view('school.timetable.index');
    }
    public function add_timetable(){
        return view('school.timetable.add_timetable');
    }
    public function edit_timetable(){
        return view('school.timetable.edit_timetable');
    }

    // Controller
public function showTimetable()
{
    return view('school.timetable.show_timetable');
}



    /**
     * Display the manage dates view.
     */
    public function manageDates()
    {
        // Get dates from session or use empty array if none exist
        $dates = Session::get('timetable_dates', []);
        return view('school.timetable.manage_dates', compact('dates'));
    }

    /**
     * Save dates to session and update timetable.
     */
    public function saveDates(Request $request)
    {
        // Validate request
        $request->validate([
            'dates' => 'required|array',
            'dates.*.date' => 'required|string',
            'dates.*.day' => 'required|string',
        ]);

        Session::put('timetable_dates', $request->dates);

        return response()->json([
            'success' => true,
            'message' => 'Dates saved successfully'
        ]);
    }

    /**
     * Apply the saved dates to the timetable.
     * This would be called via AJAX from the main timetable page.
     */
    public function getTimetableData()
    {
        $dates = Session::get('timetable_dates', []);
        return response()->json([
            'success' => true,
            'dates' => $dates
        ]);
    }

}
