@extends('layouts.master')
@section('content')

<div style="height:126px;display:block;"></div>
    <div id="list">
        <div class="wrapper">
            <div class="login">
                <div class="col-md-3">
                    &nbsp;
                </div>
                <div class="col-md-6">
                    <form id="login">
                        <div class="form-group">
                            <h2>Admin Login</h2>
                        </div>
                        <div id="admin-login-alert" class="alert" style="display:none;"><p></p></div>
                        <div class="form-group">
                            <input id="username" name="username" type="text" class="form-control" placeholder="Username"/>
                        </div>
                        <div class="form-group">
                            <input id="password" name="password" type="password" class="form-control" placeholder="Password"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-lg" value="LOGIN" />
                        </div>
                    </form>
                </div>
                <div class="col-md-3">
                    &nbsp;
                </div>
            </div>
        </div>
    </div>
<div style="height:126px;display:block;"></div>
@stop