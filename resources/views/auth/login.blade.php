@extends('layouts.front')

@section('page')

<div class="container mb-4">
        <div class="panel-heading h2 my-4 text-center">Login</div>
     <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
     {{ csrf_field() }}
        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email">Email address:</label>
                <input type="email" class="form-control" placeholder="Enter email" id="email" name="email" value="{{ old('email') }}" required autofocus>
             @if ($errors->has('email'))
                    <span class="help-block">
                     <strong>{{ $errors->first('email') }}</strong>
                    </span>
             @endif
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password" required>
            @if ($errors->has('password'))
                 <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                 </span>
            @endif
        </div>
            <div class="form-group form-check">
                <label class="form-check-label"> 
                    <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember me
                </label>
            </div>
        <button type="submit" style="background-color:#f26827; color: antiquewhite" class="btn ">Submit</button>
        <a class="btn btn-link" href="{{ url('/password/reset') }}">
             Forgot Your Password?
        </a>
  </form> 

</div>
@endsection
