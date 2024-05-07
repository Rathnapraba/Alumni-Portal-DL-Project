@extends('layout')

@section('content')

<div class="card">
    <div class="card-header">Edit Job Post</div>
    <div class="card-body">
        <form action="{{ url('/alumnis/'.$alumnis->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method("PATCH")

            <label for="role">Job Role</label><br>
            <input type="text" name="role" id="role" value="{{ $alumnis->role }}" class="form-control"><br>
            
            <label for="company_name">Company Name</label><br>
            <input type="text" name="company_name" id="company_name" value="{{ $alumnis->company_name }}" class="form-control"><br>
            
            <label for="location">Location</label><br>
            <input type="text" name="location" id="location" value="{{ $alumnis->location }}" class="form-control"><br>

            <label for="batch">Batch</label><br>
            <input type="text" name="batch" id="batch" value="{{ $alumnis->batch }}" class="form-control"><br>

            <label for="job_description">Job Description</label><br>
            <textarea name="job_description" id="job_description" class="form-control">{{ $alumnis->job_description }}</textarea><br>

            <input type="submit" value="Update" class="btn btn-success"><br>
        </form>
    </div>
</div>

@endsection
