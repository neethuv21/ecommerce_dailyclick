@extends('admin.adminheader')
@section('adminbody')



@foreach($result as $value)
<form action="/categoryeditaction/{{$value->id}}" method="post">
	@csrf
	
<input type="text" name="category" value="{{$value->category}}" style="margin-top:50px;">{{$value->category}}
<br>
<input type="submit" name="submit" value="update">
</form>
@endforeach
@endsection
