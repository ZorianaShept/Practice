<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Users List</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	@extends('layouts.my_layout')
	@section('content1')
	<div class="container">
		<table class="table">
			<br>
			<h4>Users list</h4>
 			 <thead>
			         <th>№_</th>
			         <th>Name</th>
			         <th>Email</th>
			         <th colspan="4" style="text-align: center">Аuthentication</th>
			      </thead>
			      <tbody>
			      @foreach($users as $user) 
							<tr>
			         			<td>{{$user->id}}</td>
			         			<td>{{$user->name}}</td>
			         			<td>{{$user->email}}</td>
			         			<td style="width: 10%">
			         				{!! Form::open(['url' => 'delete-btn','style' => 'visibulity: hidden']) !!}
         								<input type="hidden" name="id" value="{!! $user->id!!}">
										<button type="submit" class="btn btn-danger">delete</button>
									{!! Form::close() !!}
								</td>
			    	 		</tr>
			    	 @endforeach
			    </tbody>
</table>
</div>
</body>
@endsection
</html>