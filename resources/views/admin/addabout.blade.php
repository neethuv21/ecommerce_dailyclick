@extends('admin.adminheader')
@section('adminbody')
@endsection


<center>	
<form action="\addaboutinsert" method="post">
	@csrf
<h1 style="color:white;">Add About</h1>
<textarea  name="addabout" rows="3" cols="70" style="margin-top:50px;">

</textarea><br>
<input type="submit" name="submit" value="submit">
</form>
</center>
</body>
</html>
