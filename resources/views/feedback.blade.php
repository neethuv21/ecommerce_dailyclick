@extends('customerheader')
@section('customerbody')
<center>
<form action="\feedbackaction" method="post" style="height: 400px;margin-top: 100px;">
	@csrf
	<table>
		<tr>
					<td>Message</td>
					<td><textarea name="message" ></textarea></td>
					
				</tr>

		
			
		
			
		<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
	</table>
</form>
</center>
@endsection