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
						<h3 class="panel-title text-center">Register</h3>
					</div>
					<div class="panel-body">	
						<div class="form-group">
							<label for="Username">Username</label>
							<input type="text" class="form-control" id="userName" placeholder="Enter user name">
						</div>					
						<div class="form-group">
							<label for="userEmail">Email address</label>
							<input type="email" class="form-control" id="userEmail" placeholder="Enter email">
						</div>
						<div class="form-group">
							<label for="userPassword">Password</label>
							<input type="password" class="form-control" id="userPassword" placeholder="Enter Password">
						</div>
						<div class="form-group">
							<label for="rePassword">Retype Password</label>
							<input type="rePassword" class="form-control" id="userRePassword" placeholder="Retype Password">
						</div>
						
						<div class = "form-group text-center">
						<input type="submit" name="register" value="Register" />
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