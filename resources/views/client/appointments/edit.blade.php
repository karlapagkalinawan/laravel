@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-3 justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Update Appointment</h3>
                </div>

                @if(session('success'))
                    <div class="alert alert-success m-3">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ url('client/appointments/' . $appointment->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    {{-- Appointment form partial --}}
                    @include('client.appointments.form')

                    <div class="card-footer d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
