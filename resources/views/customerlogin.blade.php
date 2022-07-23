@extends('mainheader')
@section('mainbody')
<center>
<form action="/customerloginaction" method="post" style="height:400px;margin-top: 100px;" >
	@csrf
	
<table>

<tr>
	<td>email</td>
	<td><input type="text" name="email"></td>
</tr>
<tr>
	<td>password</td>
	<td><input type="text" name="password"></td>
</tr>

<tr>
	<td></td>
	<td><input type="submit" name="register" value="login"></td>
</tr>

@if(session('error'))
<p style="color: red;">{{session('error')}}</p>
@endif
</table>	
</form>	
</center>


@endsection