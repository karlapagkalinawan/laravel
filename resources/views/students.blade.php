@extends('layouts.app', ['page_title' => 'Students List'])

@section('content')
    <h2 class="students">{{ $user }}</h2>
    @session('success')
    </div>
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endsession
    @if($isAdmin)
    <div class="d-flex justify-content-end">
        <a href="{{ url('students/create') }}" class="btn btn-primary">Create Student</a>
    </div>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Student Name</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $key => $student)
                    <tr>
                        <td>{{ $key + 1 }}.</td>
                        <td>{{ $student->fname . ' ' . $student->lname }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->contact_number }}</td>
                        <td>
                            <a href="{{ url('students', $student->id) }}/edit" class="btn btn-success btn-sm">Edit</a>

                            <form action="{{ url('students', $student->id) }}" method="POST" style="display:inline-block;" 
                                  onsubmit="return confirm('Are you sure you want to delete this student?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {!! $students->links() !!} 
    @else
        <h1>Admin is False</h1>
    @endif
@endsection

@section('css')
    <style>
        .students {
            text-align: center;
        }
    </style>
@endsection

@push('scripts')
@endpush
