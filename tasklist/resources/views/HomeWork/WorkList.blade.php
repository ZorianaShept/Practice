<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Work List</title>
	<style>
	.cont{
			font-size: 20px;
			color: #00000;
                font-family: 'Nunito', serif;
                font-weight: 200;
                height: 100%;
                margin: 0;
		}
</style>

</head>
<body>
	
	@extends('layouts.my_layout')
	@section('content1')
	<div class="big-baner"></div>
	<div class="container">
		<div class="row justify-content-center">
		<div class="col-4">
			<br>
			<h4>Add your task</h4>
			{!! Form::open(['url' => 'new-task', 'class' => 'form-inline']) !!}
				<div class="form-group">
					<input type="text" name="task" class="form-control" autocomplete="off">	
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary form-control">Create</button>
				</div>
			{!! Form::close() !!}
			<br>
		</div>
		</div>

<div class="cont">
<div class="row">
<table class="table">
      <thead>
         <th>№_</th>
         <th>Tasks</th>
         <th>Done</th>
         <th colspan="4" style="text-align: center">Modify</th>
      </thead>
    		@foreach($TaskList as $key => $list) 
				<tr>
         			<td>{!! $key +1 !!}.</td>
         				@if ($list->done != True)
         			<td style="font-family: 'Nunito', serif">{!! $list->name!!}</td>
         				@else
         			<td style="font-family: 'Nunito', serif"><strike>{!! $list->name!!}</strike></td>
         				@endif
         			<td>{!! $list->done!!}</td> 
         			<td><a href="/WorkList?id={{ $list->id }}">Click me</a></td>

         			@if ($list->done != True)
         			<td style="width: 10%">
         				{!! Form::open(['url' => 'new-button', 'class' => 'col-1']) !!}
         					<input type="hidden" name="id" value="{!! $list->id!!}">
							<button type="submit" class="btn btn-primary">done</button>
						{!! Form::close() !!}
					</td>
					@else
					<td>		</td>
					@endif

         			<td style="width: 10%">
         				{!! Form::open(['url' => 'delete-button','style' => 'visibulity: hidden']) !!}
         					<input type="hidden" name="id" value="{!! $list->id!!}">
							<button type="submit" class="btn btn-danger">delete</button>
						{!! Form::close() !!}
					</td>

    	 		</tr>
			@endforeach
</table>
</div>

@if( $taskToEditName != null )

	<div class="row justify-content-start">
			<div class="col">
				<br>
				<h4>Edit your task</h4>
					{!! Form::open(['url' => 'change-task', 'class' => 'form-inline']) !!}
						<div class="form-group">
							<input type="text" name="task" class="form-control" value="{{ $taskToEditName }}" autocomplete="off" style="width:350px">	
							<input type="hidden" name="id" value="{{ \Request::get('id') }} ">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary form-control">Change</button>
						</div>
						<div class="form-group">
							<a href="\WorkList?id" class="btn btn-primary" style="text-decoration: none; color: #ffffff">Cancel</a>
						</div>
						{!! Form::close() !!}
			
			</div>
	</div>
@endif
</div>
</div>
</body>
@endsection
</html>