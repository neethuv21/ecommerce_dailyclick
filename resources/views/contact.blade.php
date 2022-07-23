@extends('mainheader')
@section('mainbody')

<div class="container">
	<div class="row">
		<div class="col-sm-6">
		<img src="image1.jpg" width="100%" height="500px">		
		</div>
		<div class="col-sm-6">
		<form action="/contactinsert" method="post">
			@csrf
			<table>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>Message</td>
					<td><textarea  name="message" rows="2" cols="30" style="margin-top:50px;">

              </textarea><br></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit"></td>
				</tr>
			</table>
		</form>
		</div>
		
	</div>
</div>

@endsection
