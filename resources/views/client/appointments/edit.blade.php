@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm border-0 rounded" style="background-color: #f5f1e9;">
                <div class="card-header" style="background-color: #8d6e63;">
                    <h3 class="card-title mb-0 text-white">Update Appointment</h3>
                </div>

                @if(session('success'))
                    <div class="alert" role="alert" style="background-color: #a1887f; color: #3e2723; border: none; margin: 1rem;">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ url('client/appointments/' . $appointment->id) }}" method="POST" class="p-3">
                    @csrf
                    @method('PUT')

                    {{-- Appointment form partial --}}
                    @include('client.appointments.form')

                    <div class="card-footer d-flex justify-content-end border-0 bg-transparent p-0 mt-3">
                        <button 
                            type="submit" 
                            class="btn px-4 py-2" 
                            style="background-color: #6d4c41; color: white; border: none;"
                            onmouseover="this.style.backgroundColor='#5d4037'"
                            onmouseout="this.style.backgroundColor='#6d4c41'">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
