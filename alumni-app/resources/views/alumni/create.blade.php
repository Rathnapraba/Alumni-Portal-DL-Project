@extends('layout') 

@section('content')
<div class="text-center">
    <!-- <a href="{{ url('alumni/register') }}" class="btn btn-success btn-sm" title="Add New Alumni">
        <i class="fa fa-plus" aria-hidden="true"></i> Register
        
    </a> -->
    <a href="{{ url('alumni/register') }}" class="btn btn-success btn-sm" title="Add New Alumni">
    <i class="fa fa-plus" aria-hidden="true"></i> Register
</a>

</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <!-- <div class="card-header">Alumni Details</div> -->
                <div class="card-header" style="text-align: center;font-size: 30px; color: red;">Alumni Details</div>
                <br /> 

                <div class="card-body">
                    @forelse ($alumni as $alum)
                        <div class="alumni-post mb-5 pb-4 border-bottom">
                            <h3 class="text-primary">{{ $alum->name }}</h3>
                            <p><strong>Email:</strong> {{ $alum->email }}</p>
                            <p><strong>Mobile:</strong> {{ $alum->mobile }}</p>
                            <p><strong>Batch:</strong> {{ $alum->batch }}</p>
                            <p><strong>Department:</strong> {{ $alum->department }}</p>
                            <p><strong>Address:</strong> {{ $alum->address }}</p>
                            <p><strong>Current Designation:</strong> {{ $alum->current_designation }}</p>
                            <p><strong>Employer Name:</strong> {{ $alum->employer_name }}</p>
                            <p><strong>Work Location:</strong> {{ $alum->work_location }}</p>
                            <p><strong>Domain:</strong> {{ $alum->domain }}</p>
                            <p><strong>Experience Years:</strong> {{ $alum->experience_years }}</p>
                            <p><strong>Highest Degree:</strong> {{ $alum->highest_degree }}</p>
                            <p><strong>Present Status:</strong> {{ $alum->present_status }}</p>
                            <p><strong>University:</strong> {{ $alum->university }}</p>
                            <div class="actions">
                                <a href="{{ url('/alumniss/' . $alum->id .'/edit') }}" class="btn btn-primary btn-sm" title="Edit Alumni">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                </a>
                                <form method="POST" action="{{ url('/alumniss/'. $alum->id) }}" style="display:inline" onsubmit="return confirm('Are you sure you want to delete this alumni record?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Alumni">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <p class="text-center">No alumni records found.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
