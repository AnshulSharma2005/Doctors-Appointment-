@section('title','Login')
@extends('Doctor.Layout.Auth.Doctor')

@section('content')

<div class="container">
    <div class="card" style="width : 400px">
        <div class="card-header">
          <h3>Login</h3>
        </div>

        <div class="card-body">
              <form method="POST" action={{route('doctor.login.save')}}>
                @csrf
                  <div class="mb-3">
                      <label class="form-label" for="email">Email</label>
                      <input type="email" class="form-control" id="email" placeholder="Enter your email id" name="email">
                    </div>
                  <div class="mb-3">
                      <label class="form-label" for="password">PassWord</label>
                      <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password">
                   </div>
                  <div class="mb-3">
                      <input type="checkbox" class="form-check-input" id="remember_me" >
                      <label class="form-check-label" for="remember_me">Keep me logged in</label>
                  </div>
                   <button type="submit" class="btn btn-primary" >Submit</button>
                   <a href="{{route('doctor.registration')}}">Create An Account</a>
               </form>
           </div>
   </div>
</div>
