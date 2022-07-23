@extends('customerheader')
@section('customerbody')


<form style="height:450px;">
	
		<table cellpadding="15" border="5" style="margin-left:250px;margin-top: 100px;background-color: lavender;">
			<tr style="background-color: rosybrown;">
				<th>id</th>
				<th>Total</th>
				<th>Status</th>
				<th>Date</th>
				
				</tr>
                   @foreach($result as $value)                                                                                     

				<tr>
					<td>{{$value->id}}</td>
					
					<td>{{$value->total}}</td>
					<td>{{$value->status}}</td>
					<td>{{$value->created_at}}</td>
					
					
				

					

					
				</tr>
				@endforeach
								
		</table>


	</form>

@endsection