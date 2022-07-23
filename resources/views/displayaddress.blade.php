@extends('customerheader')
@section('customerbody')
<form style="height: 500px;background-color: lavender;" method="post" action="/proceedtopay">
	@csrf
<div class="container">
	<div class="row">
		<div class="col-sm-6" >
			<h4 style="margin-top:20px;">Address</h4>
			<textarea cols="35" rows="8" style="background-color:gray;border-radius: 20px;"></textarea>
		</div>
		<div class="col-sm-6" style="width:150px;height:200px;background-color:gray;margin-top: 50px;border-radius: 30px;">
				<h5 style="margin-top:30px;"><center>Total Sum</center></h5><br>
				<h6>Total  :
					@foreach($csum as $value) 
					<input type="hidden" name="total"  value="{{$value->csum}}">  {{$value->csum}}
					@endforeach
				</h6>
			
			<center>
				<button class="btn btn-secondary" type="submit">
					Proceed To Pay
				</button>
			</center>

		</div>
		
	</div>

</div>
</form>
@endsection