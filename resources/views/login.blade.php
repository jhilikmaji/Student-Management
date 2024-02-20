@include('header')
<div class="container mt-4">
    @if(session('flash_message'))
        <div class="alert alert-danger">
            {{ session('flash_message') }}
        </div>
    @endif
    <form action="{{route('login')}}" method="post">
        {!! csrf_field() !!}
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="text" name="user_name" class="form-control @error('user_name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter User Name">
            @error('user_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" placeholder="Password">
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@include('footer')
