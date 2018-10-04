@extends('main')

@section('title', '| create')

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1 class="text-center">Create Post</h1>
			<hr>
				
			<form method="POST" action="{{url('create')}}" autocomplete="off" >
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="form-group">		
						<label for="postTitle">Post Title:</label> <br>
						<input type="text" name="postTitle" class="form-control" id="postTitle">			
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
						<label for="authorEmail">Author Email:</label> <br>
						<input type="email" name="authorEmail" class="form-control" id="authorEmail">			
					</div>
					
					<div class="form-group">
						<input type="submit" value="Submit" class="form-control btn btn-success">
					</div>


			</form>
		</div>
	</div>

@endsection
