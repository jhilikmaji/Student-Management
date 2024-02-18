@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">
            Create Student
        </div>
        <div class="card-body">
            <form action="{{url('students')}}" method="post">
                {!! csrf_field() !!}
                <label>Name</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"><br>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror <br>
                <label>Email</label>
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"><br>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror <br>
                <label>Phone Number</label>
                <input type="text" name="phoneNumber" id="phoneNumber" class="form-control @error('phoneNumber') is-invalid @enderror"><br>
                @error('phoneNumber')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror <br>
                <label>Date Of Birth</label>
                <input type="date" name="dob" id="dob" class="form-control @error('dob') is-invalid @enderror"><br>
                @error('dob')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror <br>
                <label>gender</label>
                <select name="gender" class="form-control @error('gender') is-invalid @enderror">
                    <option value="">--Select--</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select><br>
                  @error('gender')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror <br>
                <label>Address</label>
                <textarea name="address" id="address" cols="4" rows="6" class="form-control @error('address') is-invalid @enderror"></textarea><br>
                @error('address')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror <br>
                <input type="submit" value="Save" class="btn btn-success"><br>
            </form>
        </div>
    </div>
@stop
