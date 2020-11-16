<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
	<form id="signup-form" action="server.php" method="POST">

		<h3 class="mt-5"><b>Online Event Registration Form</b></h3>

            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="form-group">
			<label>First Name:</label>
			<input id="first_name" type="text" name="first_name">
			<label>Last Name:</label>
			<input id="last_name" type="text" name="last_name">
		<div>
		</div>
		
			<label>E mail:</label>
			<input id="email" type="email" name="email">
		
		<div>
			<label>Phone Number:</label>
			<input id="phone_number" type="text" name="phone_number">
		</div>
		<div>
			<label>Password:</label>
			<input id="password" type="password" name="password">
		</div>
		<div>
			<label>Confirm Password:</label>
			<input id="confirm_password" type="password" name="confirm_password">
		</div>
		<div>
		</div>
		  
			<button class="btn btn-success" type="submit" id="btn-signup" name="btn-signup">Sign Up</button>
					</div>
					

				

					<script>
 let data = new FormData();
 data.append("signup", signup);




        $("#signup-form").submit( function(event){
        
        event.preventDefault();
       
        }
		$.ajax({
		  url: 'server.php',
		  data: data,
		  processData: false,
		  contentType: false,
		  type: 'POST',
		  success: function(response){
		    console.log(response);
		  }
		});


</script>

</form>
<script src = 'js/validate.js' type="text/javascript"></script>
</body>
</html>


