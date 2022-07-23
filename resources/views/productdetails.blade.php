@extends('customerheader')
@section('customerbody')

@foreach($result as $value)
<form action="/cartinsert" method="post">
	@csrf
<div style="width:100%; height: 500px; border: 1px solid;">
	
	<div style="width:50%;height: 500px;border: 1px solid;border-color: black;float: left;" >


		<img src="/upload/{{$value->productimage}}" height="500px" width="100%" alt="" />
		<input type="hidden" name="productimage"  value="{{$value->productimage}}">

	</div>
	


	<div style="width:50%;height: 500px;margin-left: 500px;">
    
   <table style="margin-top:100px;margin-left: 50px;">
   	<tr>
   		<td><input type="hidden" name="id" id="id" value="{{$value->id}}"></td>
   	</tr>
   	<tr>
   		<td>Prize:</td>
   		<td>{{$value->prize}}</td>
   		<td><input type="hidden" name="prize" id="prize" value="{{$value->prize}}"></td>
   	</tr>
   	<tr>
   		<td>Quantity</td>
   		<td><input type="number" class="quantity" name="quantity" min="1" value="1"id="quantity"></td>
   	</tr>
   	<tr>
   		<td>Shipping:</td>
   		<td>Free Delivery</td>
   		<td><input type="hidden" name="shipping" value="free delivery"></td>
   	</tr>
   	<tr>
   		<td>COD</td>
   		<td>{{$value->status}}</td>
   		<td><input type="hidden" name="cod"  value="{{$value->status}}"></td>
   	</tr>
   	<tr>
   		<td>Total</td>
   		<td><input type="text" name="total" id="total" value="{{$value->prize}}"></td>
   	</tr>
   	<tr>
   		<td></td>
   	</tr>
   	<tr>
   		<td></td>
   		<td>
   			<button type="submit" class="btn btn-primary" style="margin-left:10px;margin-top: 20px;">Add to Cart</button >

   			<button class="btn btn-danger" style="margin-left:10px;margin-top: 20px;">Buy Now</button></td>
   		
   	</tr>
   		
   </table>
		
</form>
@endforeach
	</div>
	
</div>



@endsection