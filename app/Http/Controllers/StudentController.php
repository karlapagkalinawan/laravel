<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $data['students'] = [
        ['name' => 'Juan Dela Cruz'],
        ['name' => 'Crisostomo Ibarra'],
        ['name' => 'Captain']
    ];
    $data['isAdmin'] = true;
    $data['user'] = "Karla";
    return view ('students', $data);
    }
}
