@extends('layouts.master')
@section('content')

	<div class="row">
		<div class="col-md-12">
			<h2>Registered Users</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="table-responsive" style="overflow:hidden;">
                    <table id="users-list" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="width:5%;">Id</th>
                                <th style="width:auto;">Last Name</th>
                                <th style="width:auto;">First Name</th>
                                <th style="width:auto;">MI</th>
                                <th style="width:auto;">Address</th>
                                <th style="width:auto;">Contact Number</th>
                                <th style="width:auto;">Email Address</th>
                                <th style="width:auto;">Civil Status</th>
                                <th style="width:auto;">Gender</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($users as $user)
                            <tr>
                            	<td>{{$user->id}}</td>
                            	<td>{{ucfirst($user->lastname)}}</td>
                            	<td>{{ucfirst($user->firstname)}}</td>
                                <td>{{strtoupper($user->mi)}}</td>
                                <td>{{$user->address}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{strtolower($user->email)}}</td>
                                <td>{{ucfirst($user->civil_status)}}</td>
                                <td>{{ucfirst($user->gender)}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
		</div>
	</div>

@stop