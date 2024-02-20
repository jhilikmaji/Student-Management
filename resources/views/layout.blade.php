@include('header')
{{-- @if(Route::has('login')) --}}
<div class="container-fluid">

    <div class="row">
        <div class="col-md-3">
            <div class="sidebar">

                <div class="mt-3 mb-3 d-flex justify-content-between align-items-center">
                    <h5>Admin Panel</h5>
                    <a href="{{url('/logout')}}" class="cursor-pointer"><i class="fa fa-sign-out text-danger" title="Log Out" aria-hidden="true" ></i></a>
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
                    <a href="{{url('/teachers')}}">Teachers</a>
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                </div>
                {{-- @endauth --}}
                {{-- <a href="#about">About</a> --}}
              </div>
        </div>
        <div class="col-md-9">
            <div class="second-div">
                @yield('content')
            </div>
        </div>
    </div>
</div>
{{-- @endif --}}
@include('footer')
