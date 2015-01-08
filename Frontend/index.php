<html>
<head>
	<title>Kirberich.de</title>
	<link href="style.css" rel="stylesheet">
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">


</head>

<body>

	<?php
		include("db.php");
		include("navbar.php");
	?>

    <div class="container">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Search Lecture</h3>
                    </div>
                    <div class="panel-body">

                    	choose university
                    	<div class="dropdown">
						  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
						    University
						    <span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
						    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
						    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
						    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
						    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
						  </ul>
						</div>

						choose subject
						<div class="dropdown">
						  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
						    Subject
						    <span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
						    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
						    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
						    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
						    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
						  </ul>
						</div>

						<div class="search">
						  
						  Search lecture
						  <input type="search" /><br />
						  <a href="#"><small>Advanced search...</small></a>
						</div>



						

						

                    <!--
                        <form role="form">
                            <div class="form-group">
                                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
                            </div>

                            <div class="form-group">
                                <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
                            </div>

                            <input type="submit" value="Search" class="btn btn-info btn-block">
                        </form>
                        -->
                    </div>
                </div>
            </div>
        </div>

        <?php
		include("footer.php");
		?>
        
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    
    <script src="script.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug 
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
		
</body>
</html>