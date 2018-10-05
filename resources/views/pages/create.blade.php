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
				
			<form method="POST" action="{{url('create')}}" autocomplete="off" >
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="form-group">		
						<label for="post_title">Post Title:</label> <br>
						<input type="text" name="post_title" class="form-control" id="post_title">			
					</div>

					<div class="form-group">		
						<label for="subject">Subject:</label> <br>
						<input type="text" name="subject" class="form-control" id="subject">			
					</div>

					<div class="form-group">		
						<label for="article">Article:</label> <br>
						<textarea name="article" id="article" placeholder="Type your article here" class="form-control"></textarea>		
					</div>

					<div class="form-group">		
						<label for="author">Author:</label> <br>
						<input type="text" name="author" class="form-control" id="author">			
					</div>

					<div class="form-group">		
						<label for="author_email">Author Email:</label> <br>
						<input type="email" name="author_email" class="form-control" id="author_email">			
					</div>
					
					<div class="form-group">
						<input type="submit" value="Submit" class="form-control btn btn-success">
					</div>


			</form>
		</div>
	</div>

@endsection
