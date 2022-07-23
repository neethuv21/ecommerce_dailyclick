@extends('admin.adminheader')
@section('adminbody')
@endsection



<form>
		<table border="5" style="margin-left:360px;margin-top: 100px;">
			<tr>
				<th>id</th>
				<th>About</th>
				
				</tr>
                   @foreach($result as $value)                                                                                     

				<tr>
					<td>{{$value->id}}</td>
					
					<td>{{$value->addabout}}</td>
					
					<td><a href="/editviewabout/{{$value->id}}">Edit</a></td>
					<td><a href="/deleteviewabout/{{$value->id}}">Delete</a></td>

					

					
				</tr>
				@endforeach
								
		</table>
	</form>

