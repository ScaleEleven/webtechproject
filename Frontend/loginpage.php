<html>
<head>
	<title>Kirberich.de</title>
	<link href="style.css" rel="stylesheet">
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="dropdowns-enhancement.css" rel="stylesheet">


</head>



<body>

	<?php
	//include("db.php");
	//include("navbar.php");
	?>

	<div class="container">
	<form id = "login-form"  method="post  novalidate="novalidate">
		<div class="row centered-form">
			<div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title text-center">Login</h3>
					</div>
					<div class="panel-body">					
						<div class="form-group">
							<label for="userEmail">Username/Email address</label>
							<input type="email" class="form-control" id="userEmail" placeholder="Enter email">
						</div>
						<div class="form-group">
							<label for="userPassword">Password</label>
							<input type="password" class="form-control" id="userPassword" placeholder="Password">
						</div>
						
						<div class = "form-group text-center">
						<input type="submit" name="login" value="Login" />
						</div>
						<div class = "text-center">
						New user? 
						<a href = "registerPage.php">Register</a>
						</div>

                </div>
            </div>
        </div>
    </div>
	</form>

</div> <!-- /container -->
	
<?php

include("scripts.php");
?>



</body>
</html>