@extends('vendor.vendorheader')
@section('vendorbody')

    
     <form action="/addproductaction" id="form" method="post" enctype="multipart/form-data">
	  @csrf
	  <table style="margin-left: 400px;margin-top: 150px;">
	  	<tr>
	  	<td>Select Category</td>
	  	<td>	
	  <select name="category" id="category">
	  	 @foreach($category as $value)
	  	
	  	<option value="{{$value->category}}">{{$value->category}}</option>
	  	@endforeach
	  	
	  </select>
	  
	</td>

	</tr>
	
	<tr>
		<td>Product Name</td>
		<td><input type="text" name="pname" id="pname"></td>
	</tr>
	<tr>
	<td>Prize</td>
	<td><input type="text" name="prize" id="prize"></td>
     </tr>
     <tr>
					<td>Product Image</td>
					<td><input type="file" name="productimage" id="productimage" ></td>
					</tr>
	 
	  <tr>
	  	<td></td>
	  	<td><input type="submit" name="submit" value="submit"></td>
	  </tr>
	   </table>
	</form>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
   </script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
   <script type="text/javascript">
    
     $('#form').validate({
    rules: {
    category: {
    required: true
    
    },
    pname:{
    required:true
    
    },
    prize:{
    required:true	
    },
    productimage:{
    required:true
    
}
        
}
   
    });


    
      
   </script>
	@endsection

