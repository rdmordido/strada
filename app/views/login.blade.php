@extends('layouts.master')
@section('content')

	<div class="row">
        <h2>Admin Login</h2>
        <form id="login">
            <div id="admin-login-alert" class="alert" style="display:none;"><p></p></div>
    		<div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <input id="username" name="username" type="text" class="form-control" placeholder="Username">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input id="password" name="password" type="password" class="form-control" placeholder="Username">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="submit" class="btn btn-lg btn-primary" value="Login"/>
                    </div>
                </div>
            </div>
        </form>
	</div>

@stop