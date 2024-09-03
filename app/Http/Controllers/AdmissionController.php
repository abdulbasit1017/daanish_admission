<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; // Adjust according to your model's namespace

class AdmissionController extends Controller
{
    // Display the admission form
    public function create()
    {
        return view('admission');
    }

    // Handle form submission
    public function store(Request $request)
    {
        $request->validate([
            'student_name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'age' => 'required|integer',
            'year' => 'required|integer',
            'tehsil' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'address' => 'required|string',
            'category' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'father_id' => 'required|string|max:255',
            'mother_id' => 'required|string|max:255',
            'guardian_id' => 'required|string|max:255',
            'father_profession' => 'required|string|max:255',
            'mother_profession' => 'required|string|max:255',
            'guardian_profession' => 'required|string|max:255',
            'father_contact' => 'required|string|max:20',
            'mother_contact' => 'required|string|max:20',
            'guardian_contact' => 'required|string|max:20',
            'father_income' => 'required|numeric',
            'mother_income' => 'required|numeric',
            'guardian_income' => 'required|numeric',
            'father_qualification' => 'required|string|max:255',
            'mother_qualification' => 'required|string|max:255',
            'guardian_qualification' => 'required|string|max:255',
            'present_class' => 'required|string|max:255',
            'previous_school' => 'required|string|max:255',
            'dob_school' => 'required|date',
            'principal_name' => 'required|string|max:255',
            'school_contact' => 'required|string|max:20',
            'relative1_name' => 'required|string|max:255',
            'relative1_relation' => 'required|string|max:255',
            'relative1_phone' => 'required|string|max:20',
            'relative2_name' => 'required|string|max:255',
            'relative2_relation' => 'required|string|max:255',
            'relative2_phone' => 'required|string|max:20',
            'thumb_impression' => 'required|string|max:255',
            'signature_parent' => 'required|string|max:255',
            'signature_student' => 'required|string|max:255',
            'date' => 'required|date',
            'payment' => 'required|numeric',
            'document' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        // Handle file uploads
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
        }
        // Repeat for other file uploads...

        // Save the student data
        Student::create($request->all());

        return redirect()->route('admission.create')->with('success', 'Admission form submitted successfully!');
    }
}
