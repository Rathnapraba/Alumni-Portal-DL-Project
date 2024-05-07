@extends('layout')
@section('content')

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
<div class="text-center">
    
        <a href="{{ url('/students/create') }}" class="btn btn-success btn-sm" title="Add New ">
            <i class="fa fa-plus" aria-hidden="true"></i> Register 
        </a>
        
        <br />
        <br />
        <br /><br />
        <div class="card">
    <div class="card-header">
        <h2>Students Details </h2>

       
    </div>
    
    <br />
    <br />
   

    
    <!-- <form action="{{ url('/students/search') }}" method="POST">
    @csrf

    <div class="form-group">
        <div class="row">
            <div class="col-md-5">
                <label for="query">Search:</label>
                <input type="text" id="query" name="query" class="form-control" placeholder="Enter name or email...">
            </div>
            <div class="col-md-2">
                <label>&nbsp;</label>
                <button type="submit" class="btn btn-primary btn-md">Search</button>
            </div>
            <div class="col-md-5">
                <label for="gender">Filter by Gender:</label>
                <select class="form-control" id="gender" name="gender">
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
        </div>
    </div>
</form> -->

<form action="{{ url('/students/search') }}" method="POST">
    @csrf
    <div class="form-group">
        <div class="row">
            <div class="col-md-5">
                <input type="text" name="query" class="form-control" placeholder="Search...">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary btn-md">Search</button>
            </div>
            <div class="col-md-5">
                <select class="form-control" name="gender" id="gender">
                    <option value="">Filter by Gender:</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-2">
                <select class="form-control" name="batch" id="batch">
                    <option value="">Filter by Batch:</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <!-- Add more batch options as needed -->
                </select>
            </div>
            <div class="col-md-2">
                <select class="form-control" name="degree" id="degree">
                    <option value="">Filter by Degree:</option>
                    <option value="B.Tech">B.Tech</option>
                    <option value="B.E">B.E</option>
                    <!-- Add more degree options as needed -->
                </select>
            </div>
            <div class="col-md-3">
                <select class="form-control" name="department" id="department">
                    <option value="">Filter by Department</option>
                    <option value="AI & DS">AI & DS</option>
                    <option value="IT">IT</option>
                    <!-- Add more department options as needed -->
                </select>
            </div>
        </div>
    </div>

</form>



<br /><br />





    <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Batch</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Degree</th>
                        <th>Department</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $students as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->gender}}</td>
                        <td>{{$student->batch}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->mobile}}</td>
                        <td>{{$student->degree}}</td>
                        <td>{{$student->department}}</td>
                        <td>
                            <a href="{{ url('/students/' . $student->id . '/edit') }}" title="Edit Job Post">
                                <button class="btn btn-primary btn-sm"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button>
                            </a>
                            <br />
                            <br />
                            
                            <!-- <form method="POST" action="{{ url('/students/' . $student->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Job Post" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete </button>
                            </form> -->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection