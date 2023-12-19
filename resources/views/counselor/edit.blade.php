@extends('pages.home')

@section('content')
    <div class="container">
        <h1>Edit Counselor</h1>
        <form method="post" action="{{ route('counselor.update', $counselor->id) }}">
            @csrf
            @method('PUT')

            <label for="fullname">Full Name:</label>
            <input type="text" name="fullname" value="{{ $counselor->fullname }}" required>
            
            <label for="contact">Contact:</label>
            <input type="text" name="contact" value="{{ $counselor->contact }}" required>

            <label for="specialty">Specialty:</label>
            <input type="text" name="specialty" value="{{ $counselor->specialty }}" required>
            
            <label for="availability">Availability:</label>
            <input type="checkbox" name="availability" {{ $counselor->availability ? 'checked' : '' }}>

            <button type="submit">Update Counselor</button>
        </form>

        <form method="post" action="{{ route('counselor.destroy', $counselor->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure you want to delete this counselor?')">Delete Counselor</button>
        </form>
    </div>
@endsection
