
<!--Flash Message-->

@if (Session::has('success'))

	<div class="alert alert-success" role="alert">
		
		<strong>Succesful Thank you!!</strong> {{Session::get('success')}}
	</div>
@endif


<!--Validation Errors-->

@if(count($errors))
	<div class="alert alert-danger">
		<strong>Whoops!</strong> There were some problems with your input.
		<br/>
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>	
@endif