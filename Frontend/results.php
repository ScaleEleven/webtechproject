<html>
<head>
	<title>Kirberich.de</title>
	<link href="results.css" rel="stylesheet">
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="dropdowns-enhancement.css" rel="stylesheet">
  
</head>

<body>

	<?php
  include("db.php");
  include("navbar.php");
  ?> 



  <div class="container">

  <!-- FIRST ROW OF BLOCKS -->     
  <div class="row">

    <!-- First Result Block -->
    <div class="col-sm-3 col-lg-3">
      <div class="dash-unit">
        <h3> <a href ="#" data-toggle="modal" data-target="#detailModal">Webtechnologies</a></h3>

        <rating>Overall rating</rating>
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
            60%
          </div>
        </div>
        <div>

          <tags>#JSP #HTML5</tags>
        </div>
      </div>
    </div>
    <!-- End of first Result Block -->

    <div class="col-sm-3 col-lg-3">
      <div class="dash-unit">
        <h3> <a href ="#" data-toggle="modal" data-target="#detailModal">Webtechnologies</a></h3>

        <rating>Overall rating</rating>
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 64%;">
           40%
         </div>
       </div>
       <div>

        <tags>#JSP #HTML5</tags>
      </div>
    </div>
  </div>


  <div class="col-sm-3 col-lg-3">
    <div class="dash-unit">
      <h3> <a href ="#" data-toggle="modal" data-target="#detailModal">Webtechnologies</a></h3>

      <rating>Overall rating</rating> 
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
          10%
        </div>
      </div>
      <div>

        <tags>#JSP #HTML5</tags>
      </div>
    </div>
  </div>

  <div class="col-sm-3 col-lg-3">
    <div class="dash-unit">
      <h3> <a href ="#" data-toggle="modal" data-target="#detailModal">Webtechnologies</a></h3>

      <rating>Overall rating</rating> 
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
          10%
        </div>
      </div>
      <div>

        <tags>#JSP #HTML5</tags>
      </div>
    </div>
  </div>


  <!-- SECOND ROW OF BLOCKS --> 
  <div class="row">
   <div class="col-sm-3 col-lg-3">
    <div class="dash-unit">
      <h3> <a href ="#" data-toggle="modal" data-target="#detailModal">Webtechnologies</a></h3>

      <rating>Overall rating</rating> 
      <div class="progress">
       <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
         10%
       </div>
     </div>
     <div>

      <tags>#JSP #HTML5</tags>
    </div>
  </div>
</div>



</div>
<!-- Detail view Modal -->

<div class="modal fade" id="detailModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Webtechnologies</h4>
      </div>
      <div class="modal-body">
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
         <rating>Overall rating</rating>
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
          60%
          </div>
        </div>
         <rating>Other rating</rating>
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">  
          40%
          </div>
        </div>

        <!-- tags -->
        <div> 
          #HTML5 #JSP
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  
  
  
  



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    
    <script src="script.js"></script>

    <!-- Dropdown enhancements for radio-input -->
    <script src="js/dropdowns-enhancement.js"></script>


    
  </body>
  </html>