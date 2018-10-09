@extends('main')

@section('title', '| test index')

@section('content')
	<div class="row"> 
		<div class="col-md-12">
			<h1 class="text-center">Test Index</h1>
			<table class=" table table-bordered table-hover">
				<tr class="info">
				  	<th>Id</th>
				    <th>Post</th>
				    <th>Article</th>
				    <th>Created</th>
				    <th>Updated</th>
				</tr>
						  
				@foreach ($test_index_list as $display)
			    	<tr>
				       	<td>{{$display->id}}</td>
					    <td>{{$display->post_title}}</td>
					    <td>{{$display->article}}</td>
					    <td>{{$display->created_at}}</td>
					    <td>{{$display->updated_at}}</td>
					</tr>
				@endforeach
			</table> 
		</div>
	</div>
@endsection