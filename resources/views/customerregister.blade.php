@extends('mainheader')
@section('mainbody')

	<style type="text/css">
.error{
color: red
}
</style>
      <center>
      	<h3 style="color: white;" >Registration Form</h3>

		<form action="\customerinsert" method="post" id="frm" style="height:450px;">
			@csrf

			<table cellpadding="10">
				<tr>
					<td>User Name</td>
					<td><input type="text" name="username" id="username" ></td>
					<td id="v_username"></td>
					</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" id="email" ></td>
					<td id="v_email"></td>
					</tr>
				<tr>
					<td>Phone No</td>
					<td><input type="text" name="phone" id="phone"></td>
					<td id="v_phone"></td>
					</tr>
				<tr>
					<td>Password</td>
					<td><input type="text" name="password" id="password"></td>
					<td id="v_password"></td>
				</tr>
								

				<tr>
					<td>Address</td>
					<td><textarea name="address" id="address" ></textarea></td>
					<td id="v_address"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Register"></td>
				</tr>
				</table>
				</form>
			</center>
			
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
   </script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
   <script type="text/javascript">
    $('#frm').validate({
    rules: {
    username: {
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
},
        address:{
 
    required:true
   
    }
}
   
    });
      
   </script>
@endsection