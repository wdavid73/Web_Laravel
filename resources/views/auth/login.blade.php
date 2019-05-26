<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
        @extends('layouts.app')
        @section('content')
        <div class="container w-75 mt-5">
            <div class="row">
                <div class="col-md-7 mx-auto">
                    <div class="card border-info">
                        <div class="card-header">
                            <h5 class="card-title">Login</h5>
                        </div>
                        <div class="card-body">
                                <form class="form-group" method="POST" action="{{ route('login') }}">
                                        {{ csrf_field() }}
                
                                        <div class="form-group{{ $errors->has('email') ? ' alert alert-danger' : '' }}">
                                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                
                                            <div class="col">
                                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                
                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                
                                        <div class="form-group{{ $errors->has('password') ? ' alert alert-danger' : '' }}">
                                            <label for="password" class="col-md-4 control-label">Password</label>
                
                                            <div class="col">
                                                <input id="password" type="password" class="form-control" name="password" required>
                
                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                
                                  {{--       <div class="form-group">
                                            <div class="col-md-6 col-md-offset-4">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                 --}}
                                        <div class="form-group">
                                            <div class="col col-md-offset-4">
                                                <button type="submit" class="btn btn-info btn-block">Login</button>
                
                                              {{--   <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    Forgot Your Password?
                                                </a> --}}
                                            </div>
                                        </div>
                                    </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @endsection
        
    
</body>
</html>
