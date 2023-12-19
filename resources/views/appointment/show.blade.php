@extends('pages.home')

@section('content')
    <div class="container">
        <h1>Appointment Details</h1>
        @if($appointment)
        <p><strong>Student Name:</strong> {{ $appointment->student->fullname }}</p>
        <p><strong>Counselor Name:</strong> {{ $appointment->counselor->fullname }}</p>
        <p><strong>Date & Time:</strong> {{ $appointment->appointment_date }}</p>
        <p><strong>Status:</strong> {{ $appointment->appointment_status }}</p>
        <p><strong>Cancellation Information:</strong> {{ $appointment->cancellation_info }}</p>
        <p><strong>Comment:</strong> {{ $appointment->comment }}</p>
    @else
        <p>Appointment not found.</p>
    @endif
    
        
        <a href="{{ route('appointment.index') }}" class="btn btn-primary">Back to Appointments</a>
    </div>
@endsection
