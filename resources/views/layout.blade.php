@include('header')
{{-- @if(Route::has('login')) --}}
<div class="container-fluid">
    {{-- <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light position-sticky">
                <a class="navbar-brand" href="#">Student Management System</a>
              </nav>
        </div>
    </div> --}}
    {{-- sidebar code --}}
    <div class="row">
        <div class="col-md-2">
            <div class="sidebar">

                <div class="mt-3 mb-3">
                    <h5>Student Management System</h5>
                </div>
                {{-- @auth --}}
                <div class="sub-div">
                    <a class="active" href="{{ url('/dashboard')}}">Dashboard</a>
                    <i class="fa fa-home" aria-hidden="true"></i>
                </div>
                {{-- @elseif --}}
                <div class="sub-div">
                    <a href="{{ url('/students')}}">Student</a>
                    <i class="fa fa-user" aria-hidden="true"></i>
                </div>
                {{-- @else --}}
                <div class="sub-div">
                    <a href="#">Teachers</a>
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                </div>
                {{-- @endauth --}}
                {{-- <a href="#about">About</a> --}}
              </div>
        </div>
        <div class="col-md-10">
            <div class="second-div">
                @yield('content')
            </div>
        </div>
    </div>
</div>
{{-- @endif --}}
@include('footer')
