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
				<th>Address</th>
				
				</tr>
                   @foreach($result as $value)                                                                                     

				<tr>
					<td>{{$value->id}}</td>
					
					<td>{{$value->username}}</td>
					<td>{{$value->email}}</td>
					<td>{{$value->password}}</td>
					<td>{{$value->phone}}</td>
					<td>{{$value->address}}</td>
					
					<!-- <td><a href="/userapprove/{{$value->id}}">Approve</a></td>
					<td><a href="/userdecline/{{$value->id}}">Decline</a></td> -->

					

					
				</tr>
				@endforeach
								
		</table>
	</form>


@endsection
