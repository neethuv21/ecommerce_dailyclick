@extends('vendor.vendorheader')
@section('vendorbody')


       @foreach($result as $value)
       <form action="/vendoreditaction/{{$value->id}}" method="post">
	    @csrf
	    
	     
	
         <table cellpadding="10" style="margin-left:300px;margin-top:100px;">
				<tr>
					<td> Name</td>
					<td><input type="text" name="name" value="{{$value->name}}"></td>
					
					</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="{{$value->email}}" ></td>
					
					</tr>
				<tr>
					<td>Phone No</td>
					<td><input type="text" name="phone" value=" {{$value->phone}}" ></td>
					
					</tr>
				<tr>
					<td>Password</td>
					<td><input type="text" name="password" value="{{$value->password}}" ></td>
					
				</tr>
								<tr>
					
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Register"></td>
				</tr>
				</table>
				
				</form>
				 @endforeach
@endsection
      
