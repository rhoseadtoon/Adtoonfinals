@extends('pages.home')

@section('content')
    <h1> Create New Counselor </h1>
    {{-- <form action="{{ route('counselor.store') }}" method="POST">
        @csrf
    
        <div class="form-group">
            <label for="counselor_id">Select Counselor:</label>
            <select class="form-control" id="counselor_id" name="counselor_id">
                @foreach($counselors as $counselor)
                    <option value="{{ $counselor->id }}">{{ $counselor->fullname }}</option>
                @endforeach
            </select>
        </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form> --}}
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('counselors/create')}}" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label for="fullname"> Fullname </label>
                    <input type="text" name="fullname" class="form-control">
                    @error('fullname')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="contact"> Contact </label>
                    <input type="text" name="contact" class="form-control">
                    @error('contact')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="specialty"> Specialty </label>
                    <input type="text" name="specialty" class="form-control">
                    @error('specialty')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                    <button class="btn btn-primary">
                        Add New Counselor
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection