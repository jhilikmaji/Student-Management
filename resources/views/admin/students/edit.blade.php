@extends('layout')
@section('content')
    <div class="card mt-2">
        <div class="card-header">
            Edit Student
        </div>
        <div class="card-body">
            {{-- @php echo $students ; echo $students->name @endphp --}}
            <form action="{{url('students/' .$students->id)}}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" value="{{$students->id}}" id="id">
                <label>Name</label>
                <input type="text" name="name" value="{{$students->name}}" id="name" class="form-control"><br>
                <label>Email</label>
                <input type="email" name="email" value="{{$students->email}}" id="email" class="form-control"><br>
                <label>Phone Number</label>
                <input type="text" name="phoneNumber" value="{{$students->phoneNumber}}" id="phoneNumber" class="form-control"><br>
                <label>Age</label>
                <input type="date" name="dob" id="dob" value="{{$students->dob}}" class="form-control"><br>
                <label>Gender</label>
                <select name="gender"  class="form-control">
                    <option value="">{{$students->gender}}</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select><br>
                <label>Address</label>
                <textarea name="address" value="" id="address" cols="4" rows="6" class="form-control">{{$students->address}}</textarea>
                <input type="submit" value="Update" class="btn btn-success"><br>
            </form>
        </div>
    </div>
@stop
