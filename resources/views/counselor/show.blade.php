@extends('pages.home')

@section('content')


<style>
  .btn-back {
        background-color: #007bff; 
        border-color: #007bff; 
        color: #fff; 
    }

    .btn-back:hover {
        background-color: #0056b3; 
        border-color: #0056b3; 
        color:#fff;
    }

    .btn-danger-modal {
        background-color: #dc3545; 
        border-color: #dc3545; 
        color: #fff; 
    }

    .btn-danger-modal:hover {
        background-color: #c82333; 
        border-color: #bd2130; 
    }
    strong{
      font-weight: bold;
    }
</style>

<div class="modal fade" id="deleteCounselorModal" tabindex="-1" aria-labelledby="deleteCounselorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteCounselorModalLabel">Delete Counselor - {{$counselor->fullname}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
          <form action="{{url('counselors/delete/' . $counselor->id)}}" method="POST">
          @csrf
          @method('DELETE')
          <div class="modal-body">
            Are you sure you want to delete this counselor information?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger">Delete</button>
          </div>
        </form>
      </div>
    </div>
  </div>

    <h1>{{ $counselor->fullname }} </h1>

    <p><strong>Contact:</strong> {{ $counselor->contact }}</p>
    <p><strong>Specialty:</strong> {{ $counselor->specialty }}</p>
    <p><strong>Availability:</strong> {{ $counselor->availability ? 'Available' : 'Not Available' }}</p>

    <a href="{{ url('/counselors') }}" class="btn btn-back me-md-2 mt-2" >Back to Counselors List</a>
    <button type="button" class="btn btn-danger me-md-2 mt-2" data-bs-toggle="modal" data-bs-target="#deleteCounselorModal">
      Delete Counselor
    </button>
@endsection
