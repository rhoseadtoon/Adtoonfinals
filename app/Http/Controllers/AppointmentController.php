<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Counselor;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::orderBy('id')->get();
    
        return view('appointment.index', ['appointments' => $appointments]);
    }
    

    public function create()
    {
        $students = Student::all();
        $counselors = Counselor::all();
    

        return view('appointment.create', ['students' => $students, 'counselors'=>$counselors]);
    }

    public function store(Request $request)
{
    $request->validate([
        'students_id' => 'required|exists:students,id',
        'counselors_id' => 'required|exists:counselors,id',
        'appointment_date' => 'required',
        'appointment_status' => 'required',
        'cancellation_info' => 'nullable',
        'comment' => 'nullable',
    ]);

    Appointment::create([
        'students_id' => $request->students_id,
        'counselors_id' => $request->counselors_id,
        'appointment_date' => $request->appointment_date,
        'appointment_status' => $request->appointment_status,
        'cancellation_info' => $request->cancellation_info,
        'comment' => $request->comment,
    ]);

    return redirect('/appointments')->with('message', 'A new appointment has been added');
}


public function show($id)
{
    $appointment = Appointment::find($id);
    return view('appointment.show', compact('appointment'));
}

}
