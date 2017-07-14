@extends('admin.admin_app')

{{ Html::style('css/admin/login.css') }}

@section('content')

<style>
    .col-md-2 {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    
</style>

<div class="login-container">
    <div class="col-md-2">

        <img class="login-logo" src="{{ URL::asset('images/logo.png') }}">

        @if(Session::has('failed'))
            <div class="center">
                <div class="alert {{ Session::get('alert_type') }} fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ Session::get('failed') }}
                </div>
            </div>
        @endif

        <form class="form-horizontal login-form" role="form" class="form-signin" method="POST" action="{{ action('LoginController@authenticate') }}">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <input id="login-mail" class="form-control" type="text" name="name" placeholder="Username" required>

            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif

            <input id="login-pass" class="form-control" type="password" name="password" placeholder="Password" required>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif

            <input id="login-btn" type="submit" name="login" value="Login"> 

        </form> 
    </div>
</div>

@stop