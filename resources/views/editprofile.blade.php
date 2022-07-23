@extends('customerheader')
@section('customerbody')

	<style type="text/css">
.error{
color: red
}
</style>
      <center>
      	<h3 style="color: white;" >Registration Form</h3>
      	@foreach($result as $value)

		<form action="\editprofileaction/{{$value->id}}" method="post" id="frm" style="height:450px;" >
			@csrf

			<table cellpadding="10">
				<tr>
					<td>User Name</td>
					<td><input type="text" name="username" id="username" value="{{$value->username}}" ></td>
					
					</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" id="email" value="{{$value->email}}" ></td>
					
					</tr>
				<tr>
					<td>Phone No</td>
					<td><input type="text" name="phone" id="phone" value="{{$value->phone}}"></td>
					
					</tr>
				<tr>
					<td>Password</td>
					<td><input type="text" name="password" id="password" value="{{$value->password}}"></td>
					
				</tr>
								

				<tr>
					<td>Address</td>
					<td><textarea name="address" id="address" value="{{$value->address}}" >{{$value->address}}</textarea></td>
					
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Register"></td>
				</tr>
				</table>
				</form>
				 @endforeach
			</center>
			@endsection