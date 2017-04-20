@extends('layouts.frontend')
@section('custom-styles')
    {!! Html::style('frontend/css/pages/page_log_reg_v1.css?'.time()) !!}
@stop

@section('content')
    <div class="container content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                {!! Form::open(['url' => route('register'), 'class' => 'reg-page']) !!}
                    <div class="reg-header">
                        <h2>Register a new account</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                <label>First Name</label>
                                <input id="first_name" type="text" class="form-control"
                                        name="first_name" value="{{ old('first_name') }}"  autofocus>
                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                <label>Last Name</label>
                                <input id="last_name" type="text" class="form-control"
                                       name="last_name" value="{{ old('last_name') }}" >
                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <label>Username</label>
                        <input id="username" type="text" class="form-control"
                               name="username" value="{{ old('username') }}" 
                               autofocus>
                        @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label>Email</label>
                        <input id="email" type="email" class="form-control" placeholder="Email"
                               name="email" value="{{ old('email') }}" >

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label>Password</label>
                                <input id="password" type="password" class="form-control"
                                       name="password" >

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" >
                            </div>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                        {{ Form::label('Phone Number') }}
                        {{ Form::text('phone_number', old('phone_number'), ['class' => 'form-control']) }}

                        @if ($errors->has('phone_number'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone_number') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('gender_code') ? ' has-error' : '' }}">
                                {{ Form::label('Gender') }}
                                {{ Form::select('gender_code', ['Male', 'Female', 'Other'], old('gender_code'), ['class' => 'form-control']) }}

                                @if ($errors->has('gender_code'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('gender_code') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('height_inches') ? ' has-error' : '' }}">
                                {{ Form::label('Height') }}
                                {{ Form::text('height_inches', old('height_inches'), ['class' => 'form-control']) }}

                                @if ($errors->has('height_inches'))
                                    <span class="help-block">
                                <strong>{{ $errors->first('height_inches') }}</strong>
                            </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('experience') ? ' has-error' : '' }}">
                                {{ Form::label('Experience') }}
                                {{ Form::select('experience', getEnumValues('players', 'experience'), old('experience'), ['class' => 'form-control']) }}

                                @if ($errors->has('experience'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('experience') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('preferred_position') ? ' has-error' : '' }}">
                                {{ Form::label('Preferred Positions') }}
                                {{ Form::select('preferred_position', getEnumValues('players', 'preferred_position'), old('preferred_position'), ['class' => 'form-control']) }}

                                @if ($errors->has('preferred_position'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('preferred_position') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('vertical_stack') ? ' has-error' : '' }}">
                        <label>Do you know what a vertical stack is?</label>
                        <div class="radio no-top-space">
                            <label class="margin-right-10">
                                {{ Form::radio('vertical_stack', 1, old('vertical_stack'), ['class' => '']) }}
                                Yes
                            </label>
                            <label>
                                {{ Form::radio('vertical_stack', 0, old('vertical_stack'), ['class' => '']) }}
                                No
                            </label>
                        </div>

                        @if ($errors->has('vertical_stack'))
                            <span class="help-block">
                                <strong>{{ $errors->first('vertical_stack') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('horizontal_stack') ? ' has-error' : '' }}">
                        <label>Do you know what a horizontal stack is? </label>
                        <div class="radio no-top-space">
                            <label class="margin-right-10">
                                {{ Form::radio('horizontal_stack', 1, old('horizontal_stack'), ['class' => '']) }}
                                Yes
                            </label>
                            <label>
                                {{ Form::radio('horizontal_stack', 0, old('horizontal_stack'), ['class' => '']) }}
                                No
                            </label>
                        </div>

                        @if ($errors->has('horizontal_stack'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('horizontal_stack') }}</strong>
                                </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('zone') ? ' has-error' : '' }}">
                        <label>Do you know what a zone is?  </label>
                        <div class="radio no-top-space">
                            <label class="margin-right-10">
                                {{ Form::radio('zone', 1, old('zone'), ['class' => '']) }}
                                Yes
                            </label>
                            <label>
                                {{ Form::radio('zone', 0, old('zone'), ['class' => '']) }}
                                No
                            </label>
                        </div>

                        @if ($errors->has('zone'))
                            <span class="help-block">
                                <strong>{{ $errors->first('zone') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <button type="submit" class="btn-u btn-u-primary">
                                SIGN UP
                            </button>
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
    </div>
@endsection
