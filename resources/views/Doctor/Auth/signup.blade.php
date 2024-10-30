@section('title','SignUp')
@extends('Doctor.Layout.Auth.Doctor')

@section('content')

<div class="container">
    <div class="card" style="width : 400px">
        <div class="card-header">
          <h3>Sign up</h3>
        </div>

        <div class="card-body">
            <form action="{{route('doctor.registration.save')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="name">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="spl">Specialization</label>
                    <input type="text" class="form-control" id="spl" name="spl" placeholder="Enter your specialization">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password_confirmation">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirmation" placeholder="Confirm your password" name="password_confirmation">
                </div>
                <button type="submit" class="btn btn-success">Sign up</button>
                Already a member? <a href="{{route('doctor.login')}}">Login</a>
            </form>
        </div>
    </div>
</div>
@endsection
