<!DOCTYPE html>
<html>
<head>
	
	<title>About Me</title>
	 <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
	<style>

	 .cont{
			text-align:center;
			font-size: 30px;
			color: #564D65;
                font-family: 'Nunito', serif;
                font-weight: 200;
                height: 100%;
                margin: 0;
		}
		.flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                 height: 100%;
            }
            .content {
                text-align: center;
            }
            
		
	</style>

</head>
<body>
	@extends('layouts.my_layout')
	@section('content')
		<div class="container">
			<div class="flex-center">
				<div class="content">
					<br>
					<h3 class="cont">ABOUT SITE</h3>

  						<p><em>Quickly Available Conveniently</em></p>
  							<p class="cont">Would you like to write a to-do list and at any moment to contact him? then register on the site and create your own personal to-do list.
This website was created to enable every user of the World Wide Web to create his own personal cabinet, which will be able to create a daily list of things to do. In addition, he will be able to celebrate accomplished tasks, easily add, edit, update, and delete each case.</p>
				</div>
			</div>
		</div>
</body>
@endsection
</html>