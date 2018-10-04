
<!DOCTYPE html>
<html>
<head> 
	<title> CRUD</title>


	<link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>
	<div class="main">
			LARAVEL <br>
			CRUD 
	</div>

	<div class="secondary">	
			<a href="{{ URL::to('add-data')}}">ADD DATA</a>
	</div>
 	<div class="secondary">	
			<a href="{{ URL::to('all-data')}}">ALL DATA</a> 
	</div> 

</body>
</html>