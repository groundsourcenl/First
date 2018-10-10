@extends('main')

@section('title', '| show single post')

@section('content')
	
	<div class="row">
		<div class="col-md-8">
			<h1>{{$kilam->post_title}}</h1>
			<p class="lead"> {{$kilam->article}} </p>

			<!--OR-->

		<!-- $testshow->post_title
			$testshow->article -->
		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Created At:</dt>
					<dd> {{ date('M j, Y H:i', strtotime($kilam->created_at))}}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Created At:</dt>
					<dd>{{ date('M j, Y H:i', strtotime($kilam->updated_at))}}</dd>
				</dl>
				<div class="row">
					<div class="col-sm-6">
						<a href="{{route('test.edit', [$kilam->id]) }}"  class="btn btn-primary btn-block">Edit</a>
					</div>
					<div class="col-sm-6">
						<a href="{{route('test.destroy', [$kilam->id]) }}" class="btn btn-danger btn-block">Delete</a>
					</div>
				</div> 	
			</div>

			
		</div>
	</div>		
			
@endsection