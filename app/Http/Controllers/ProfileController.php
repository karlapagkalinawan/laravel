<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $greetings = "Karla";
        return view('profile', ['greetings' => $greetings]);
    }    
    public function create()
    {

    }

    public function store(Request $request)
    {

    }
    public function edit ($id)
    {

    }
    public function update(Request $id)
    {

    }
    public function show ($id)
    {

    }
    public function destroy($id)
    {

    }
}
