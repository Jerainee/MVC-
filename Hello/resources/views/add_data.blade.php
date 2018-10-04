
<html>
<body>
<link rel="stylesheet" href="{{asset('css/add.css')}}">

<form method="POST" action="{{ url('insert-data') }}"> 
		@csrf
		<div class="input-group">
			<input type="hidden" name="id">
			<label> Name </label>
				<input type="text" name="name">
		</div>

		<div class="input-group">
			<label> Address </label>
				<input type="text" name="address">	
		</div>

		<div class="input-group">
			<label> Mobile </label>
				<input type="text" name="mobile">
		</div>
		<div class="input-group">
			<label> Status </label>
				<input type="text" name="status">
		</div>

		<div class="botton">
			<button class="btn" type="submit" name="save" >Save</button>
		</div> 

</form>
</body>
</html>