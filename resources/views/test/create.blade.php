@extends('main')

@section('title', '| create')

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1 class="text-center">Test Page</h1>
			<hr>
				
			<form method="POST" action="{{route('test.store')}}" autocomplete="off">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="post_title">Post Title:</label> <br>
                    <input type="post_title" id="post_title" name="post_title" class="form-control"> 
                </div>

                <div class="form-group">
                    <label for="article">Article:</label> <br>
                    <textarea name="article" id="article" placeholder="Type your article here" class="form-control"></textarea>
      	       	</div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success form-control" value="Submit">
                </div>
            </form>
		</div>
	</div> <!--End of row-->

@endsection
