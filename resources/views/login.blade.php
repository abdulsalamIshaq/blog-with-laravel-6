@extends('layout')
@section('content')
<div class="form-group row">
    <label for="login" class="col-sm-4 col-form-label text-md-right">
        {{ __('Username or Email') }}
    </label>
 
    <div class="col-md-6">
        <input id="login" type="text"
               class="form-control{{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}"
               name="login" value="{{ old('username') ?: old('email') }}" required autofocus>
 
        @if ($errors->has('username') || $errors->has('email'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>
@stop