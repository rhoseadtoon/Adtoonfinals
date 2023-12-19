@extends('pages.home') 

@section('content')

<style>
    .btn-primary {
        background-color: #28a745; 
        border-color: #28a745; 
    }

    .btn-primary:hover {
        background-color: #218838;
        border-color: #218838; 
    }
</style>

        <h1>Create New Appointment</h1>

                <form action="{{url('appointments/create')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="students_id">Select Name of Student</label>
                        <select name="students_id" id="students_id" class="form-control">
                            <option hidden="true">Select Name of Student</option>
                            <option selected disabled> Select Name of Student</option>
                            @foreach($students as $student)
                                <option value="{{ $student->id }}">{{ $student->fullname }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="counselors_id">Select Counselor</label>
                        <select name="counselors_id" id="counselors_id" class="form-control">
                            <option hidden="true">Select Counselor </option>
                            <option selected disabled>Select Counselor</option>
                            @foreach($counselors as $counselor)
                                <option value="{{ $counselor->id }}">{{ $counselor->fullname }}</option>
                            @endforeach
                        </select>
                        @error('student_id')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group mt-2">
                        <label for="appointment_date">Appointment Date:</label>
                        <input type="datetime-local" name="appointment_date" id="appointment_date" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="appointment_status">Appointment Status:</label>
                        <input type="text" name="appointment_status" id="appointment_status" class="form-control" value="scheduled">
                    </div>

                    <div class="form-group">
                        <label for="cancellation_info">Cancellation Information:</label>
                        <textarea name="cancellation_info" id="cancellation_info" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="comment">Comment:</label>
                        <textarea name="comment" id="comment" class="form-control"></textarea>
                    </div>

                    <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Create Appointment</button>
                    </div>
                </form>

@endsection
