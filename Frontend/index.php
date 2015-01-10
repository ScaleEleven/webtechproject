<html>
<head>
	<title>Kirberich.de</title>
	<link href="style.css" rel="stylesheet">
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="dropdowns-enhancement.css" rel="stylesheet">


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
							<button class="btn btn-default dropdown-toggle" type="button" id="uniChooser" data-toggle="dropdown" aria-expanded="true">
								University
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="uniChooser">
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
							</ul>
						</div>

						choose subject
						<div class="dropdown">
							<button class="btn btn-default dropdown-toggle" type="button" id="subjectChooser" data-toggle="dropdown" aria-expanded="true">
								Subject
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="subjectChooser">
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
							</ul>
						</div>

						<div class="search">

							Search lecture
							<input type="search">
						</div>


                    -->
                </div>
            </div>
        </div>
    </div>

</div> <!-- /container -->
	
<?php

include("scripts.php");
?>



</body>
</html>