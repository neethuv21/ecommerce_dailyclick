@extends('vendor.vendorheader')
@section('vendorbody')

<form>
		<table border="5" style="margin-left:360px;margin-top: 100px;">
			<tr>
				<th>id</th>
				<th>Category</th>
				<th>Product Name</th>
				<th>Prize</th>
				<th>Product Image</th>
				
				</tr>
                   @foreach($result as $value) 
                   @if($value->status=='Approve')                                                                                    

				<tr>
					<td>{{$value->id}}</td>
					
					<td>{{$value->category}}</td>
					<td>{{$value->pname}}</td>
					<td>{{$value->prize}}</td>
					<td>{{$value->productimage}}</td>
					
					<td><a href="/editproduct/{{$value->id}}">Edit</a></td>
					<td><a href="/deleteproduct/{{$value->id}}">Delete</a></td>

					

					
				</tr>
				@endif
				@endforeach
								
		</table>
	</form>
	@endsection