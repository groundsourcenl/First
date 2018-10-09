@extends('main')

@section('title', '| create')

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1 class="text-center">Create Post</h1>
			<hr>

			<form method="POST" action="{{url('create')}}" autocomplete="off">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="post_title">Post:</label> <br>
                    <input type="post_title" id="post_title" name="post_title" class="form-control"> 
                </div>

                <div class="form-group">
                    <label for="subject">Subject:</label> <br>
                    <input type="subject" id="subject" name="subject" class="form-control">
                </div>

                <div class="form-group">
                    <label for="article">Article:</label> <br>
                    <textarea type="article" id="article" name="article" class="form-control" placeholder="Type your Article here"></textarea>
                </div>

                <div class="form-group">
                    <label for="author">Author:</label> <br>
                    <input type="author" id="author" name="author" class="form-control"> 
                </div>

                <div class="form-group">
                    <label for="email">Author Email:</label> <br>
                    <input name="author_email" id="email"class="form-control" type="email"></input>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success form-control" value="Submit">
                </div>
            </form>
				
		</div>

		
	</div> <!--End of row-->

@endsection
