@extends('admin.adminheader')
@section('adminbody')
@endsection
<center>	
<form action="\addcategoryaction" method="post">
	@csrf

<input type="text" name="category" style="margin-top:50px;">

<br>
<input type="submit" name="submit" value="submit">
</form>
</center>
</body>
</html>