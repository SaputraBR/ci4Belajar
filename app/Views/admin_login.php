<!DOCTYPE html>
<html lang="en">
	<?php session_start();
     
		if(isset($_POST['submit'])){
			$logins = array('Saputrabr' => '123456', "admin" => "admin");
					
			$Username = isset($_POST['username']) ? $_POST['username'] : '';
			$Password = isset($_POST['password']) ? $_POST['password'] : '';
					  
			if (isset($logins[$Username]) && $logins[$Username] == $Password){
				$_SESSION['UserData']['username']=$logins[$Username];
				header("location:admin.php");
				exit;
			} else {
				$msg="<span style='color:red'>Invalid Login Details</span>";
			};
		}
	?>
	<style>
		input[type=text],input[type=password], select {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		};

	</style>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>

	<div class="d-flex align-items-center justify-content-center" style="height: 100vh; width: 100%; background-color: #d1ae81">
		<form method="post" class="" style="box-sizing: border-box; padding: 50px; border-radius: .6rem; background-color: #fff">
		<?php if(isset($msg)){?>
		<?php echo $msg?>
    	<?php } ?>
			<h2 class="text-center">Admin Host</h2>
			<span class="form-group">
				<label for="username">User</label>
				<input name="username" type="text" id="username" name="username" placeholder="Username..">
			</span>

			<span class="form-group">
				<label for="password">Password</label>
				<input name="password" type="password" id="password" name="password" placeholder="Password.." class="mb-4">
			</span>

			<span class="d-flex justify-content-center">
				<input name="submit" type="submit" value="Login" id="login" style="width: 100px; height: 40px; color: white; background: linear-gradient(to right, #297bed, rgb(25, 198, 237)); border: none; border-radius: .6rem;">
			</span>
		</form>
	</div>

</body>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>
