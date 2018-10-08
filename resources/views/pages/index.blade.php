@extends('main')

@section('title', '| Index')

@section('content')
    
    <div class="row">
        <div class="col-md-12">
            <h1>Index</h1>

            <table class=" table table-bordered table-hover">
				  <tr class="info">
				  	<th>Id</th>
				    <th>Post</th>
				    <th>Subject</th>
				    <th>Article</th>
				    <th>Author</th>
				    <th>Arthor Email</th>
				    <th>Created</th>
				    <th>Updated</th>

				  </tr>
				  

			       @foreach ($index_list as $display)
			       <tr>
			       	<td>{{$display->id}}</td>
				    <td>{{$display->post_title}}</td>
				    <td>{{$display->subject}}</td>
				    <td>{{$display->article}}</td>
				    <td>{{$display->author}}</td>
				    <td>{{$display->author_email}}</td>
				    <td>{{$display->created_at}}</td>
				    <td>{{$display->updated_at}}</td>

				  </tr>
				  @endforeach
			</table> 
            
        </div>
    </div>
@endsection

@section('sidebar')

@endsection