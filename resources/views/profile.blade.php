@extends('layouts.app', ['page_title' => 'Profile'])
@section('content')
        <h1 class="students">This is profile page.</h1>  
        <h2> {{ $greetings; }} </p>
        <button class="btn btn-primary btn-sm">Button</button>
@endsection
