
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

        <!-- SEARCH in Navbar and hidden fields --> 
        <form class="navbar-form navbar-right" action ="results.php" method ="post">
          <input type="text" class="form-control" placeholder="Search...">
          <input type="hidden" id ="uniField" name="uni" value="All unis">
          <input type="hidden" id ="degreeField" name="degree" value="All degrees">
          <input type="hidden" id ="programField" name="program" value="All programs">
          <input type ="submit" class="btn" value="Submit!">
        </form>



        <li class="active"><a href="index.php">Home</a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" id ="uniLabel">Uni <span class="caret"></span>
          <ul class="dropdown-menu" role="menu">

            <li><a href="javascript:setUniLabel('All schhols')">All schools</a></li>
            <!-- Fetching entries via php -->
            <?php
            $sql = "SELECT Name FROM Project.University ORDER BY Name ASC;";
            $universities = $conn->query($sql);

            while($row = $universities->fetch_assoc()) {
              echo "<li><a href=\"javascript:setUniLabel('$row[Name]');\">$row[Name]</a></li>";

            }
            ?>


          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" id = "degreeLabel">Degree <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="javascript:setDegreeLabel('All degrees')">All degrees</a></li>
            <li><a href="javascript:setDegreeLabel('Bachelor')">Bachelor</a></li>
            <li><a href="javascript:setDegreeLabel('Master')">Master</a></li>
            <li><a href="javascript:setDegreeLabel('Diploma')">Diploma</a></li>
            <li><a href="javascript:setDegreeLabel('Other')">Other</a></li>
          </ul>
        </li>


        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" id="programLabel">Program <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">

           <!-- Fetching entries v'a php -->
           <li><a href="javascript:setProgramLabel('All programs');">All programs</a></li>
           <?php
           $selectedUni = 1;
           $selectedDegree = "Master";
           $sql = "SELECT Name FROM Project.Program WHERE University = $selectedUni AND Degree=\"$selectedDegree\" ORDER BY Name ASC";

           $programs = $conn->query($sql);

           while($row = $programs->fetch_assoc()) {
            echo "<li><a href=\"javascript:setProgramLabel('$row[Name]')\">$row[Name]</a></li>";
          }
          ?>



          <script type="text/javascript">

           function updateFormValues(){
            document.getElementById('uniField').value = uniLabel;
            document.getElementById('degreeField').value = degreeLabel;
            document.getElementById('programField').value = programLabel;
  

          }

          
          function setUniLabel(newName) {
           
            document.getElementById('uniLabel').innerHTML = newName;
            updateFormValues();

          }   

          function setDegreeLabel(newName) {
            document.getElementById('degreeLabel').innerHTML = newName;
            updateFormValues();

          }   

          function setProgramLabel(newName) {
            document.getElementById('programLabel').innerHTML = newName;
            updateFormValues();
          }    

        </script>
        
      </ul>
    </li>



  </ul>
</div><!--/.nav-collapse -->
</div>
</nav>