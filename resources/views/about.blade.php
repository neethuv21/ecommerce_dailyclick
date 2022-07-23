@extends('mainheader')
@section('mainbody')


<div class="container">
	<div class="row">
		<div class="col-sm-6">
		<img src="image1.jpg" width="100%" height="500px">		
		</div>
		<div class="col-sm-6">
		@foreach($result as $value)                                                                                    
												
	<p >{{$value->addabout}}</p>
			
					
@endforeach	
		</div>
		
	</div>
</div>

@endsection
