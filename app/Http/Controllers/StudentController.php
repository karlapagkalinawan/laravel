<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
       // $data['students'] = [
       // ['name' => 'Juan Dela Cruz'],
       // ['name' => 'Crisostomo Ibarra'],
        //['name' => 'Captain']

  //  ];
        $data['students']= Student::orderBy('created_at', 'desc')->paginate(15);
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
            'fname'    => 'required',
            'lname'    => 'required',
            'email'    => 'required|email|unique:students,email',
            'contact_number'   => 'required'
        ],
        [
            'fname.required' => 'The first name field is required.',
            'lname.required' => 'The last name field is required.',
        ]
    );

    Student::create([
        'fname' => $request['fname'],
        'lname' => $request['lname'],
        'email' => $request['email'],
        'contact_number' => $request['contact_number'],
       ]);

       return redirect()->to('students');
    }
    public function edit ($id)
    {
        return "The id is $id";
    }
    public function update(Request $id)
    {

    }
    public function show ($id)
    {
        return "show id $id";
    }
    public function destroy($id)
    {

    }

}


