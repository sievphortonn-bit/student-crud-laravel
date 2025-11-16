<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveStudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 

class StudentController extends Controller
{
    public function index()
    {
        return view('students.index', ['students' => Student::all()]);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'gender'     => 'required|in:Male,Female,Other',
            'address'    => 'required|string|max:500',
            'photo'      => 'nullable|image',
        ]);

        $student = new Student;

        $student->first_name = $request->first_name;
        $student->last_name  = $request->last_name;
        $student->gender     = $request->gender;
        $student->address    = $request->address;

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('photos', 'public');
            $student->photo = $path;
        }

        $student->save();

        return redirect()->route('students.index')->with('success','Student added successfully.');;
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(SaveStudentRequest $request, Student $student)
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) {

        if ($student->photo && Storage::disk('public')->exists($student->photo)) 
            {
                Storage::disk('public')->delete($student->photo);
            }

            $data['photo'] = $request->file('photo')->store('photos','public');
        }
        $student->update($data);
        return redirect()->route('students.index', $student)->with('success','Student updated successfully.');;
    }
    public function destroy(Student $student)
    {
        if ($student->photo && Storage::disk('public')->exists($student->photo)) 
        {
            Storage::disk('public')->delete($student->photo);
        }
            $student->delete();
            return redirect()->route('students.index')->with('success','Student deleted successfully.');
    
    }
}