@extends('admin.adminheader')
@section('adminbody')
@endsection


@foreach($result as $value)
<form action="/viewabouteditaction/{{$value->id}}" method="post">
	@csrf
	<textarea  name="addabout" value="{{$value->addabout}}" rows="3" cols="70" style="margin-top:50px; ">{{$value->addabout}}

</textarea><br>
<input type="submit" name="submit" value="update">
</form>
@endforeach
