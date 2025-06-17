<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $data['students'] = Student::orderBy('created_at', 'desc')->paginate(15);
        $data['isAdmin'] = true;
        $data['user'] = "Karla";

        return view('students', $data);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'fname'           => 'required',
                'lname'           => 'required',
                'email'           => 'required|email|unique:students,email',
                'contact_number'  => 'required',
            ],
            [
                'fname.required'  => 'The first name field is required.',
                'lname.required'  => 'The last name field is required.',
            ]
        );

        Student::create([
            'fname'          => $request->input('fname'),
            'lname'          => $request->input('lname'),
            'email'          => $request->input('email'),
            'contact_number' => $request->input('contact_number'),
        ]);

        return redirect()->to('students')->with('success', 'Student has been added successfully.');
    }

    public function edit($id)
    {
        $data['student'] = Student::find($id);
        return view('students.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'fname'           => 'required',
                'lname'           => 'required',
                'email'           => 'required|email|unique:students,email,' . $id,
                'contact_number'  => 'required',
            ],
            [
                'fname.required'  => 'The first name field is required.',
                'lname.required'  => 'The last name field is required.',
            ]
        );

        $student = Student::find($id);

        if ($student) {
            $student->fname           = $request->input('fname');
            $student->lname           = $request->input('lname');
            $student->email           = $request->input('email');
            $student->contact_number  = $request->input('contact_number');
            $student->save();
        }

        return redirect()->to('students')->with('success', 'Student has been added successfully.');
    }

    public function show($id)
    {
        return "show id $id";
    }

    public function destroy($id)
    {

        $student = Student::find($id);

        if ($student) {
            $student->delete();
        }

        return redirect()->back()->with('success', 'Student has been added successfully.');
    }
}
