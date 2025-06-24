@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0 rounded" style="background-color: #f5f1e9;">
                <div class="card-header" style="background-color: #8d6e63;">
                    <h3 class="card-title mb-0 text-white">Add New Appointment</h3>
                </div>

                <form action="{{ route('appointments.store') }}" method="POST" class="p-4">
                    @csrf

                    {{-- Student Select --}}
                    <div class="form-group mb-3">
                        <label for="student_id" style="color: #5d4037;">Student</label>
                        <select 
                            name="student_id" 
                            id="student_id" 
                            class="form-control @error('student_id') is-invalid @enderror" 
                            required
                            style="border-color: #a1887f;"
                        >
                            <option value="">-- Select Student --</option>
                            @foreach ($students as $student)
                                <option value="{{ $student->id }}" {{ old('student_id') == $student->id ? 'selected' : '' }}>
                                    {{ $student->fname }} {{ $student->lname }}
                                </option>
                            @endforeach
                        </select>
                        @error('student_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Title --}}
                    <div class="form-group mb-3">
                        <label for="title" style="color: #5d4037;">Title</label>
                        <input
                            type="text"
                            name="title"
                            id="title"
                            class="form-control @error('title') is-invalid @enderror"
                            value="{{ old('title') }}"
                            required
                            style="border-color: #a1887f;"
                        >
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Appointment Date --}}
                    <div class="form-group mb-3">
                        <label for="appointment_date" style="color: #5d4037;">Appointment Date</label>
                        <input
                            type="date"
                            name="appointment_date"
                            id="appointment_date"
                            class="form-control @error('appointment_date') is-invalid @enderror"
                            value="{{ old('appointment_date') }}"
                            required
                            style="border-color: #a1887f;"
                        >
                        @error('appointment_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Appointment Time --}}
                    <div class="form-group mb-3">
                        <label for="appointment_time" style="color: #5d4037;">Appointment Time</label>
                        <input
                            type="time"
                            name="appointment_time"
                            id="appointment_time"
                            class="form-control @error('appointment_time') is-invalid @enderror"
                            value="{{ old('appointment_time') }}"
                            required
                            style="border-color: #a1887f;"
                        >
                        @error('appointment_time')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Status --}}
                    <div class="form-group mb-3">
                        <label for="status" style="color: #5d4037;">Status</label>
                        <select
                            name="status"
                            id="status"
                            class="form-control @error('status') is-invalid @enderror"
                            required
                            style="border-color: #a1887f;"
                        >
                            <option value="Pending" {{ old('status') == 'Pending' ? 'selected' : '' }}>Pending</option>
                            <option value="Completed" {{ old('status') == 'Completed' ? 'selected' : '' }}>Completed</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Remarks --}}
                    <div class="form-group mb-3">
                        <label for="remarks" style="color: #5d4037;">Remarks</label>
                        <textarea
                            name="remarks"
                            id="remarks"
                            class="form-control @error('remarks') is-invalid @enderror"
                            rows="3"
                            style="border-color: #a1887f;"
                        >{{ old('remarks') }}</textarea>
                        @error('remarks')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Submit Button --}}
                    <div class="card-footer d-flex justify-content-end border-0 bg-transparent p-0 mt-3">
                        <button 
                            type="submit" 
                            class="btn px-4 py-2" 
                            style="background-color: #6d4c41; color: white; border: none;"
                            onmouseover="this.style.backgroundColor='#5d4037'"
                            onmouseout="this.style.backgroundColor='#6d4c41'">
                            Save Appointment
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
