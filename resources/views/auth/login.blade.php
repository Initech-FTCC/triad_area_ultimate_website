@extends('layouts.frontend')
@section('custom-styles')
    {!! Html::style('frontend/css/pages/page_log_reg_v1.css?'.time()) !!}
@stop

@section('content')
    <div class="container content">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                {!! Form::open(['url' => route('login'), 'class' => 'reg-page']) !!}
                    <div class="reg-header">
                        <h2>Sign In</h2>
                    </div>
                    @include ('partial/alert_message')
                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <input id="username" type="text" placeholder="Username" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                        @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                 <strong>{{ $errors->first('password') }}</strong>
                             </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group  text-center">
                        <button type="submit" class="btn-u btn-u-primary btn-block">
                            Login
                        </button>

                        <a class="btn btn-link color-white" href="{{ url('/password/reset') }}">
                            Forgot Your Password?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
