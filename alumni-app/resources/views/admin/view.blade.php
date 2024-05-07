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
                    @foreach($admins as $admin)
                    <tr>
                        <td>{{$admin->id}}</td>
                        <td>{{$admin->name}}</td>
                        <td>{{$admin->gender}}</td>
                        <td>{{$admin->batch}}</td>
                        <td>{{$admin->email}}</td>
                        <td>{{$admin->mobile}}</td>
                         <td>{{$admin->degree}}</td>
                          <td>{{$admin->department}}</td>
                        <td>
                            <a href="{{ url('/admin/' . $admin->id . '/edit') }}" title="Edit Job Post">
                                <button class="btn btn-primary btn-sm"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button>
                            </a>

                            <br />
                            <br />
                            
                            <form method="POST" action="{{ url('/admin/' . $admin->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Job Post" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    