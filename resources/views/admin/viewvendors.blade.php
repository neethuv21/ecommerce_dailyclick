
@extends('admin.adminheader')
@section('adminbody')
<form>
		<table border="5" style="margin-left:360px;margin-top: 100px;">
			<tr>
				<th>id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Password</th>
				<th>Phone</th>
				
				</tr>
                   @foreach($result as $value)                                                                                     

				<tr>
					<td>{{$value->id}}</td>
					
					<td>{{$value->name}}</td>
					<td>{{$value->email}}</td>
					<td>{{$value->password}}</td>
					<td>{{$value->phone}}</td>
					
					<td><a href="/vendorapprove/{{$value->id}}">Approve</a></td>
					<td><a href="/vendordecline/{{$value->id}}">Decline</a></td>

					

					
				</tr>
				@endforeach
								
		</table>
	</form>


@endsection