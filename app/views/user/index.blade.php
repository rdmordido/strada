@extends('layouts.master')
@section('content')
    <div style="height:126px;display:block;"></div>
	 <div id="list">
        <div class="wrapper">            
            <div class="row">
                <div class="col-md-10">
                    <h2>Registered Users</h2>
                </div>
                <div class="col-md-2">
                <a href="/users/download" target="_blank"><button type="button" class="btn btn-sm btn-default" title="Download CSV"><i class="fa fa-download"></i> Download CSV</button></a>
                </div>
            </div>
			<div class="table-responsive" style="overflow:hidden;">
                    <table id="users-list" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="width:auto;">Reference Code</th>
                                <th style="width:auto;">Last Name</th>
                                <th style="width:auto;">First Name</th>
                                <th style="width:auto;">Address</th>
                                <th style="width:auto;">Contact Number</th>
                                <th style="width:auto;">Email Address</th>
                                <th style="width:auto;">Date Registered</th>
                                <th style="width:auto;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($users as $user)
                            <tr>
                            	<td>{{$user->reference_code}}</td>
                            	<td>{{ucfirst($user->lastname)}}</td>
                            	<td>{{ucfirst($user->firstname)}}</td>                                
                                <td>{{$user->address}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{strtolower($user->email)}}</td>
                                <td>{{date('M d, Y',strtotime($user->created_at))}}</td>
                                <td><a href="/users/{{$user->id}}/edit">Edit</a> | <a user-id="{{$user->id}}" class="btn-remove-user" href="javascript:;">Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
		</div>
	</div>
<div style="height:126px;display:block;"></div>
@stop