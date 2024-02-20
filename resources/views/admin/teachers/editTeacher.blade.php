@extends('layout')
@section('content')
    <div class="card mt-2">
        <div class="card-header">
            Edit Teacher
        </div>
        <div class="card-body">
            {{-- @php echo $students ; echo $students->name @endphp --}}
            <form action="{{url('teachers/' .$teachers->id)}}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" value="{{$teachers->id}}" id="id">
                <label>Name</label>
                <input type="text" name="name" value="{{$teachers->name}}" id="name" class="form-control @error('name') is-invalid @enderror"><br>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror <br>
                <label>Email</label>
                <input type="email" name="email" value="{{$teachers->email}}" id="email" class="form-control @error('email') is-invalid @enderror"><br>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror <br>
                <label>Subject</label>
                <select name="subject" class="form-control @error('subject') is-invalid @enderror">
                    <option value="">{{$teachers->subject}}</option>
                    <option value="Bengali">Bengali</option>
                    <option value="English">English</option>
                    <option value="Math">Math</option>
                    <option value="Geography">Geography</option>
                    <option value="History">History</option>
                    <option value="Science">Science</option>
                    <option value="Computer">Computer</option>
                  </select><br>
                @error('subject')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror <br>
                <label>Phone Number</label>
                <input type="text" name="phoneNumber" value="{{$teachers->phoneNumber}}" id="phoneNumber" class="form-control @error('phoneNumber') is-invalid @enderror"><br>
                @error('phoneNumber')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror <br>
                <label>Age</label>
                <input type="date" name="dob" id="dob" max="{{ \Carbon\Carbon::now()->subYears(27)->format('Y-m-d') }}" value="{{$teachers->dob}}" class="form-control @error('dob') is-invalid @enderror"><br>
                @error('dob')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror <br>
                <label>Gender</label>
                <select name="gender"  class="form-control @error('gender') is-invalid @enderror">
                    <option value="">{{$teachers->gender}}</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select><br>
                @error('gender')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror <br>
                <label>Address</label>
                <textarea name="address" value="" id="address" cols="4" rows="6" class="form-control @error('address') is-invalid @enderror">{{$teachers->address}}</textarea>
                <input type="submit" value="Update" class="btn btn-success"><br>
                @error('address')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror <br>
            </form>
        </div>
    </div>
@stop
