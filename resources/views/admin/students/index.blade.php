@extends('layout')
@section('content')
<div class="container mt-3">
    {{-- <div class="row"> --}}
        {{-- <div class="col-md-11"> --}}
            <div class="card">
                <div class="card-header">
                    <h2>Student table</h2>
                </div>
                @if(session('flash_message'))
                <div class="alert alert-success">
                    {{ session('flash_message') }}
                </div>
                @endif
                <div class="card-body">
                    <a href="{{ url('/students/create')}}" class="btn btn-success btn-sm" title="Add New Student">
                        Add <i class="fa fa-user-circle" aria-hidden="true"></i>
                    </a>
                    <br><br>
                    <div class="table-responsive">
                        <table id="myTable" class="table table-responsive display">
                            <thead>
                                <tr>
                                    <th>Serial No</th>
                                    <th>Student Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>PhoneNumber</th>
                                    <th>Date Of Birth</th>
                                    <th>Geder</th>
                                    <th>Address</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            @foreach($students as $key => $std)
                            <tbody>
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$std->student_id}}</td>
                                    <td>{{$std->name}}</td>
                                    <td>{{$std->email}}</td>
                                    <td>{{$std->phoneNumber}}</td>
                                    <td>{{$std->dob}}</td>
                                    <td>{{$std->gender}}</td>
                                    <td>{{$std->address}}</td>
                                    <td class="d-flex">
                                        {{-- <a href="{{ url('/student/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> --}}
                                        <a href="{{ url('students/' . $std->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm mr-1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>

                                        <form method="POST" action="{{ url('students/' . $std->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button onclick="return confirm('Are you sure you want to delete this?');" type="submit" value="delete" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
                {{-- <div class="card-footer">Footer</div> --}}
              </div>
        {{-- </div> --}}
    {{-- </div> --}}
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
@endsection
