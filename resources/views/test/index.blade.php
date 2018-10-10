@extends('main')

@section('title', '| All Test Post')

@section('content')
	
	<div class="row">
		<div class="col-md-10">
			<h1 class="text-center">All test Post</h1>			
		</div>
		<div class="row">
			<div class="col-md-2">
				<a href="{{route('test.create') }}" class="btn btn-primary btn-block">Create New Test Post</a>
			</div>
			
		</div>

	</div>

	<div class="row"> 
		<div class="col-md-12">
			
			<table class=" table table-bordered table-hover">
				<tr class="info">
				  	<th>Id</th>
				    <th>Post</th>
				    <th>Article</th>
				    <th>Created</th>
				    <th>Updated</th>
				    <th>Action</th>
				</tr>
						  
				@foreach ($test_index as $display)
			    	<tr>
				       	<td>{{$display->id}}</td>
					    <td>{{$display->post_title}}</td>
					    <td>{{substr($display->article, 0,30)}}{{strlen($display->article)>30 ? "...": ""}}</td>
					    <td>{{date('M j, Y H:i', strtotime($display->created_at))}}</td>
					    <td>{{date('M j, Y H:i', strtotime($display->updated_at))}}</td>
					    <th> <a href="{{ route('test.show', $display->id) }}" class="btn btn-default">View</a> <a href="{{ route('test.edit', $display->id) }}"class="btn btn-default">Edit</a> </th>
					</tr>
				@endforeach
			</table> 
		</div>
	</div>
@endsection