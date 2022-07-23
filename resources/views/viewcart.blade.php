@extends('customerheader')
@section('customerbody')

	<style type="text/css">
		table,th,td{
			border: 1px solid grey;
		}
		td{
			background-color: white;

		}
		.thhead{
			font-size: 13px;
			padding: 3px;
			background-color: lavender;
		}
		.tdhead{
			padding: 3px;
			text-align: center;
		}
		
	</style>
	<div class="container">
	<div class="row">
		<div class="col-md-8">
			
             <form  style="height:800px;" >
             	
		<table style="width:2px;" >
			<tr>
				<th class="thhead" >id</th>
				<th class="thhead" >Product Image</th>
				<th class="thhead">Shipping</th>
				<th class="thhead">COD</th>
				<th class="thhead" >Prize</th>
				<th class="thhead">Quantity</th>
				<th class="thhead" >Total</th>
				
				</tr>
                   @foreach($result as $value) 
                                                                                                    

				<tr>

   		   <td class="tdhead">
   		   	<input type="hidden" name="id" id="id" value="{{$value->id}}">{{$value->id}}</td>
   
					
					
					<td class="tdhead">
						<img src="/upload/{{$value->productimage}}" height="40px" width="40px">
					</td>
					<td class="tdhead" >{{$value->shipping}}</td>
					<td class="tdhead" >{{$value->cod}}</td>
					<td class="tdhead" >
					<input type="hidden" name="prize" id="prize" value="{{$value->prize}}" >{{$value->prize}}
				   </td>
					<td class="tdhead" >
					<input type="number" class="quantity" name="quantity" id="quantity" value="{{$value->quantity}}" style="width:120px;">
				   </td>
					<td class="tdhead">
						<input type="text" name="total" id="total" value="{{$value->total}}" style="width:120px;">
					</td>
					<td><a href="/deletecart/{{$value->id}}">Remove From Cart</a></td>
								

					
				</tr>
				
				@endforeach
								
		</table>
	</form>


		</div>
		<div class="col-md-4" style="width:150px;height:200px;background-color:lavender;" >
			
		 @foreach($csum as $value) 
			<h5><center>Total Amount</center></h5><br>
			<h6>Total Sum :   {{$value->csum}}</h6>
			<button class="btn btn-primary"><a href="/displayaddress" style="color:black;">Place Order</a></button>
			@endforeach
		</div>

		
</div>
</div>

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
    $(".quantity").on('change',function(){
    	// alert("hai")
     var row = $(this).closest('tr');
    var x = parseInt(row.find("#id").val());
   // alert(id)    
    var quantity = parseInt(row.find(this).val());
    //alert(quantity)
    var prize = parseInt(row.find('#prize').val());
    // alert(prize)
    var total= parseInt(quantity)*parseInt(prize);
    // alert(total)
    row.find('#total').val(total);

    

     $.ajax({
				type:"get",
				url:"/totalprize/"+x,
				data:{
					quantity:quantity,
                    total:total
				},
				success:function(result)
				{ 
					//$('#total').html(total);
				}
			});
			location.reload(true);
          });
          });



       </script>
       @endsection
	