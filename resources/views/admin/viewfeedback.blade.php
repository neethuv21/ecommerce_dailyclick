@extends('admin.adminheader')
@section('adminbody')

<form>
		<table border="5" style="margin-left:360px;margin-top: 100px;">
			<tr>
				<th>id</th>
				<th>User Name</th>
				<th>Message</th>
				
				
				</tr>
                   @foreach($result as $value)                                                                                     

				<tr>
					<td>{{$value->id}}</td>
					
					<td>{{$value->username}}</td>
					<td>{{$value->message}}</td>
					
					
					
					<!-- <td><a href="/productapprove/{{$value->id}}">Approve</a></td>
					<td><a href="/productdecline/{{$value->id}}">Decline</a></td>  -->

					

					
				</tr>
				@endforeach
								
		</table>
	</form>


@endsection