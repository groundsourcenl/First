@extends('main')

@section('title', '| Show Contact Inserted')

@section('content')
	<div class="row">
		<div class="col-md-12 text-center">
			<table class="table table-hover table-bordered ">
				<tr class="info ">
					<th class="text-center">Id</th>
				    <th class="text-center">Email</th>
				    <th class="text-center">Subject</th>
				    <th class="text-center">Message</th>
				    <th class="text-center">Created</th>
				    <th class="text-center">Updated</th>

				</tr>

				@foreach ($show_contact_inserted_list as $display)
			       <tr>
			       	<td>{{$display->id}}</td>
				    <td>{{$display->email}}</td>
				    <td>{{$display->subject}}</td>
				    <td>{{$display->message}}</td>
				    <td>{{$display->created_at}}</td>
				    <td>{{$display->updated_at}}</td>

				  </tr>
				  @endforeach
				
			</table>
			
		</div>
	</div>

@endsection