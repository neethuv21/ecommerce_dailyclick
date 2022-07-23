@extends('vendor.vendorheader')
@section('vendorbody')

    @foreach($result as $value)
     <form action="/editproductaction/{{$value->id}}" method="post" enctype="multipart/form-data">
	  @csrf
	  <table style="margin-left: 400px;margin-top: 150px;">
	  	<tr>
	  	<td>Select Category</td>
	  	<td>	
	  <select name="category">
	  	
	  	
	  	<option value="{{$value->category}}">{{$value->category}}</option>
	  	
	  	
	  </select>
	  
	</td>

	</tr>
	
	<tr>
		<td>Product Name</td>
		<td><input type="text" name="pname" value="{{$value->pname}}"></td>
	</tr>
	<tr>
	<td>Prize</td>
	<td><input type="text" name="prize" value="{{$value->prize}}"></td>
     </tr>
	  <tr>
					<td>Product Image</td>
					<td><input type="file" name="productimage" value="{{$value->productimage}}"></td>
					</tr>
	  <tr>
	  	<td></td>
	  	<td><input type="submit" name="submit" value="submit"></td>
	  </tr>
	   </table>
	</form>
	@endforeach
	@endsection

