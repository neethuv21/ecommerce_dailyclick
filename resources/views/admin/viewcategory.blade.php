
@extends('admin.adminheader')
@section('adminbody')
@endsection
<form>
		<table border="5" style="margin-left:360px;margin-top: 100px;">
			<tr>
				<th>id</th>
				<th>Category</th>
				
				</tr>
                   @foreach($result as $value)                                                                                     

				<tr>
					<td>{{$value->id}}</td>
					
					<td>{{$value->category}}</td>
					
					<td><a href="/editcategory/{{$value->id}}">Edit</a></td>
					<td><a href="/deletecategory/{{$value->id}}">Delete</a></td>

					

					
				</tr>
				@endforeach
								
		</table>
	</form>

