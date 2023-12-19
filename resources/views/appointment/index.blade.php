@extends('pages.home')

@section('content')

<style>
    .btn-primary {
        background-color: #28a745;
        border-color: #28a745; 
    }

    .btn-primary:hover {
        background-color: #218838;
        border-color: #1e7e34; 
    }
    a{
        text-decoration-line: none;
    }
    </style>

    <h1>Appointments</h1>
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
            <a href="{{ url('appointments/create') }}" class="btn btn-primary me-md-2" type="button">
                Add new Appointment
            </a>
        </div>


            <table class="table">
                <thead>
                    <tr>
                        <th>Student</th>
                        <th>Counselor</th>
                        <th>Appointment Date and Time</th>
                        <th>Status</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($appointments as $appointment)
                        <tr>
                            <td>{{ $appointment->student->fullname }}</td>
                            <td>{{ $appointment->counselor->fullname }}</td>
                            <td>{{ $appointment->appointment_date }}</td>
                            <td>{{ $appointment->appointment_status }}</td>
                            <td>
                                <a href="{{ route('appointment.show', $appointment->id) }}">
                                    View Details
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        @endsection
