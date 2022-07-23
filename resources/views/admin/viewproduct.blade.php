@extends('admin.adminheader')
@section('adminbody')

<form>
		<table border="5" style="margin-left:360px;margin-top: 100px;">
			<tr>
				<th>id</th>
				<th>Category</th>
				<th>Product Name</th>
				<th>Prize</th>
				
				</tr>
                   @foreach($result as $value)                                                                                     

				<tr>
					<td>{{$value->id}}</td>
					
					<td>{{$value->category}}</td>
					<td>{{$value->pname}}</td>
					<td>{{$value->prize}}</td>
					
					
					<td><a href="/productapprove/{{$value->id}}">Available</a></td>
					<td><a href="/productdecline/{{$value->id}}">Decline</a></td> 

					

					
				</tr>
				@endforeach
								
		</table>
	</form>


@endsection
