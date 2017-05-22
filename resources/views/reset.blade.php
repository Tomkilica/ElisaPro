@extends ('app')

@section('content')
<head>
    <link rel="stylesheet" type="text/css" href="{{ url('/resources/assets/css/registration.css')}}">
</head>
<body>
<section class="regis">
   <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
        {{ csrf_field() }}
        <input type="hidden" name="token" value="{{ $token }}">
        <input id="email" type="email"  name="email" placeholder="email adrese" value="{{ $email or old('email') }}" required>
        <div class="massage">
            @if($errors->get('email'))
            <!-- <p>{{$errors->get('email')}}</p> -->
                    <p>Upisana email adresa mora biti ista kao i potvrđena email adresa.</p>
            @endif
        </div>
        <div class="massage"></div>
        <input type="password" name="password" placeholder="lozinka" required>
        <div class="massage">
            @if($errors->get('password'))
                <p>Lozinka mora imati minimum 6 karaktera i biti ista kao potvrđena</p>
            @endif
        </div>
        <input type="password" name="password_confirmation" placeholder="potvrda lozinke" required>
        <div class="massage"></div>
        <input type="submit" value="Registruj se">
    </form>
</section>
</body>
@endsection


<!-- @section('content') -->
<!-- 

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Reset Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection -->