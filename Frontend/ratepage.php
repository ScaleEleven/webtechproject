<html>
<head>
	<title>Kirberich.de</title>
	<link href="lecturepage.css" rel="stylesheet">
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="dropdowns-enhancement.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
  
</head>

<script>
  window.onload = function(e){
    initToolTips();
    $('.progress').bind('click', function (ev) {
      var $div = $(this);
      var $progressBar = $div.find('.progress-bar');

      var offset = $div.offset();

      var top = offset.top;
      var left = offset.left;
      var bottom = top + $div.outerHeight();
      var right = left + $div.outerWidth();

      var x = ev.clientX - left;

      var relWidth = x/(right-left)*100;
      $progressBar.width(x);


      var $hiddenField = $div.find('.rateValue');
      $hiddenField[0].value=relWidth;


      
    

    }); 
  }


function initToolTips(){
  $('[data-toggle="tooltip"]').tooltip();

}


</script>

<body>

	<?php
  include("db.php");
  include("navbar.php");
  ?> 


  <div class="container">
    <div class="fach">
      <h4>Rate it</h4>
    </div>

    <div class="texts">
      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
    </div>

    <div class="attr">
      <p>Overall</p>
      <p>Interestingness</p>
      <p>Lecture Material Quality</p>
      <p>Teacher Support</p>
      <p>Exam difficulty</p>
      <p>Workload</p>
      <p>Usefulnes</p>
    </div>


    <div class="rate">

      <form name="rateit" action="#" method="POST">
     <div class="progress" data-toggle ="tooltip" data-placement="right" title ="Click to rate" >
      <div class="progress-bar"  role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 99%;">
        <input class="rateValue" type="hidden" name="Overall" value="99">
      </div>
    </div>
    <div class="progress" data-toggle ="tooltip" data-placement="right" title ="Click to rate">
      <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
        <input class="rateValue" type="hidden" name="Interest" value="40">
      </div>
    </div>
    <div class="progress" data-toggle ="tooltip" data-placement="right" title ="Click to rate">
      <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
        <input class="rateValue" type="hidden" name="Material" value="60">
      </div>
    </div>
    <div class="progress" data-toggle ="tooltip" data-placement="right" title ="Click to rate">
      <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
        <input class="rateValue" type="hidden" name="Support" value="40">
      </div>
    </div>
    <div class="progress" data-toggle ="tooltip" data-placement="right" title ="Click to rate">
      <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
        <input class="rateValue" type="hidden" name="Exam" value="60">
      </div>
    </div>
    <div class="progress" data-toggle ="tooltip" data-placement="right" title ="Click to rate">
      <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
        <input class="rateValue" type="hidden" name="Workload" value="40">
      </div>
    </div>
    <div class="progress" data-toggle ="tooltip" data-placement="right" title ="Click to rate">
      <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
        <input class="rateValue" type="hidden" name="Usefulnes" value="60">
      </div>
    </div>       

  </div>


  <div class="texts">

  </div>

  <a href="ratepage.php" type="button" class="btn btn-primary btn-block" role="button">Take That!</a>


</div>




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