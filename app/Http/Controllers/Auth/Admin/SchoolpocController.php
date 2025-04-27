<?php

namespace App\Http\Controllers\Auth\Admin;

use Carbon\Carbon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Schoolpocs;

class SchoolpocController extends Controller
{
   
    public function createpoc($id)
{
    $school_id = $id; 
    return view('admin.school_admin.createPOC', compact('school_id'));  // Pass the user data to the form
}

    
    public function pocIndex($id)
{
    $pocs = Schoolpocs::where('school_id', $id)->get(); 
    return view('admin.school_admin.pocIndex', compact('pocs','id'));
}


    // Store a newly created POC in the database
    public function store(Request $request)
{
    $validated = $request->validate([
        'pocName' => 'required|string|max:255',
        'pocGender' => 'required|string|max:10',
        'pocDOB' => 'nullable|date',
        'pocDesignation' => 'required|string|max:255',
        'pocNumber' => 'required|digits:10',
        'pocEmail' => 'required|email|max:255',
        'school_id' => 'required|exists:users,id',
    ]);

    if ($request->has('pocDOB') && $request->input('pocDOB')) {
        $formattedDob = Carbon::parse($request->input('pocDOB'))->format('Y-m-d');
    } else {
        $formattedDob = null;  
    }

    $poc = new Schoolpocs();
    $poc->poc_name = $request->input('pocName');
    $poc->poc_gender = $request->input('pocGender');
    $poc->poc_dob = $formattedDob; 
    $poc->poc_designation = $request->input('pocDesignation');
    $poc->poc_contact_number = $request->input('pocNumber');
    $poc->poc_alternate_contact_number = $request->input('poc_alternate_contact_number');
    $poc->poc_email = $request->input('pocEmail');
    $poc->school_id = $request->input('school_id');  
    $poc->save();

    return redirect()->route('school-admin.poc', ['id' => $poc->school_id])
    ->with('success', 'POC added successfully!');

}


    // Show the form to edit a specific POC
    // public function editpoc(Schoolpocs $poc)
    // {
    //     return view('admin.school_admin.editPOC', compact('poc'));
    // }

    public function editpoc($id)
{
    // Retrieve the POC by its ID
    $poc = Schoolpocs::findOrFail($id);
    
    // Return the edit view with the POC data
    return view('admin.school_admin.editPOC', compact('poc'));
}
    // Update a specific POC in the database
    public function updatepoc(Request $request, $id)
    {
        $validated = $request->validate([
            'pocName' => 'required|string|max:255',
            'pocGender' => 'required|string|max:10',
            'pocDOB' => 'nullable|date',
            'pocDesignation' => 'required|string|max:255',
            'pocNumber' => 'required|digits:10',
            'pocEmail' => 'required|email|max:255',
        ]);
    
        // Find the POC by ID
        $poc = Schoolpocs::findOrFail($id);
    
        // Update the POC fields
        $poc->poc_name = $request->input('pocName');
        $poc->poc_gender = $request->input('pocGender');
        $poc->poc_dob = $request->input('pocDOB') ? Carbon::parse($request->input('pocDOB'))->format('Y-m-d') : null;
        $poc->poc_designation = $request->input('pocDesignation');
        $poc->poc_contact_number = $request->input('pocNumber');
        $poc->poc_alternate_contact_number = $request->input('poc_alternate_contact_number');
        $poc->poc_email = $request->input('pocEmail');
        $poc->save();
    
        // Redirect back with a success message
        return redirect()->route('school-admin.poc', ['id' => $poc->school_id])
                         ->with('success', 'POC updated successfully!');
    }

}
