
	<!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Kirberich</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">

          <!-- SEARCH in Navbar -->
          <form class="navbar-form navbar-right">
            	<input type="text" class="form-control" placeholder="Search...">
           </form>


            <li class="active"><a href="index.php">Home</a></li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Uni <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">

              <!-- Fetching entries via php -->
              <?php
                $sql = "SELECT Name FROM University ORDER BY Name ASC;";
                $universities = $conn->query($sql);
                while($row = $universities->fetch_assoc()) {
                echo '<li><a href=#>'.$row['Name'].'</a></li>';
                }
              ?>
                
                <!-- need a divider?
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
                -->
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Degree <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Bachelor</a></li>
                <li><a href="#">Master</a></li>
                <li><a href="#">Diploma</a></li>
                <li><a href="#">Other</a></li>
              </ul>
            </li>


            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Program <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                
                 <!-- Fetching entries v'a php -->
             


            
        
              </ul>
            </li>


          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>