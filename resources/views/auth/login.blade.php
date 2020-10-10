@extends('layouts.app')

@section('content')
<div class="container text-right">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}" style="margin-top: 70px;">
                {{ csrf_field() }}
                <!-- Please sign in -->
                <h2 class="text-center"><b>تسجيل الدخول</b></h2>
                <br>
                <!-- Email -->
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control" name="email" placeholder="البريد الإلكتروني" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <!-- Password -->
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control" placeholder="كلمة المرور" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <!-- Remember me -->
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> تذكرني
                            </label>
                        </div>
                    </div>
                </div>
                <!-- Login -->
                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success btn-block">تسجيل الدخول</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
