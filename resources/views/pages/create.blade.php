@extends('main')

@section('title', '| create')

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1 class="text-center">Create Post</h1>
			<hr>

			@if (Session::has('success'))

				<div class="alert alert-success" role="alert">
					
					<strong>Succesful Thank you!!</strong> {{Session::get('success')}}
				</div>
			@endif

			

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
				
			<p>Hello</p>
		</div>
	</div> <!--End of row-->

@endsection
