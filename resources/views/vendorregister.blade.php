@extends('mainheader')
@section('mainbody')


     <center>
      	<h3 style="color: white;" >Registration Form</h3>

		<form action="\vendorinsert" method="post" id="form" style="height:450px;"  >
			@csrf

			<table cellpadding="10">
				<tr>
					<td> Name</td>
					<td><input type="text" name="name" id="name" ></td>
					<td id="v_name"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>
						<input type="text" name="email" id="email" >
					</td>
					<td id="v_email"></td>
				</tr>
				<tr>
					<td>Phone No</td>
					<td>
						<input type="text" name="phone" id="phone" >
					</td>
					<td id="v_phone"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>
						<input type="text" name="password" id="password" >
					</td>
					<td id="v_password"></td>
				</tr>
					
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Register">
					</td>
				</tr>
			</table>
		</form>
		
	</center>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
   </script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
   <script type="text/javascript">
    
     $('#form').validate({
    rules: {
    name: {
    required: true,
    minlength: 2
    },
    email:{
    required:true,
    email:true
    },
    phone:{
    required:true	
    },
    password:{
    required:true,
    minlength:5
}
        
}
   
    });


    
      
   </script>
   @endsection
			
		