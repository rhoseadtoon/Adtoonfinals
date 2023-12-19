@extends('pages.home')

@section('content')

<style>
    a{
        text-decoration-line: none;
    }
    .btn-primary {
        background-color: #28a745; 
        border-color: #28a745; 
    }

    .btn-primary:hover {
        background-color: #218838; 
        border-color: #1e7e34; 
    }
</style>

<h1>Counselors</h1>
    @if (session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif

        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
            <a href="{{ url('/counselors/create') }}" class="btn btn-primary me-md-2" type="button">
                Add new counselor
            </a>
        </div>

        
        <table class="table">
            <thead>
                <tr>
                    <th>Fullname</th>
                    <th>Contact</th>
                    <th>Specialty</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($counselors as $counselor)
                    <tr>
                        <td> <a href="{{ url("/counselors/{$counselor->id}") }}"> {{ $counselor->fullname }} </a> </td>
                        <td>{{ $counselor->contact }}</td>
                        <td>{{ $counselor->specialty }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No counselors available.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
@endsection
