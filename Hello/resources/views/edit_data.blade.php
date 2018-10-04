<html>
<body>
<link rel="stylesheet" href="{{asset('css/add.css')}}">

<form method="POST" action="{{ url('update-data/'.$single_view->id) }}"> 
		@csrf
		<div class="input-group">
			<input type="hidden" name="id" value="{{ $single_view->id }}">
			<label> Name </label>
				<input type="text" name="name"  value="{{ $single_view->name }}">
		</div>

		<div class="input-group">
			<label> Address </label>
				<input type="text" name="address"  value="{{ $single_view->address }}">	
		</div>

		<div class="input-group">
			<label> Mobile </label>
				<input type="text" name="mobile"  value="{{ $single_view->mobile }}">
		</div>
		<div class="input-group">
			<label> Status </label>
				<input type="text" name="status"  value="{{ $single_view->status }}">
		</div>

		<div class="botton">
			<button class="btn" type="submit" name="save" >Update Data</button>
		</div> 

</form>
</body>
</html>