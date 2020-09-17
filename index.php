<?php
  session_start();
  $isIndex = 1;
  if(array_key_exists('teacher_id',$_SESSION) && isset($_SESSION['teacher_id'])) {
   header('Location: teacher.php');
  } else {
    if(!$isIndex) header('Location: index.php');
  }
?>
<!DOCTYPE html>
<html>
 <head>
  <link rel="stylesheet" href="css/style.css"/>
  <title> UU Student Attendance</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/login.js"></script>
   <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
 </head>
 <body>
 
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand active" href="index.php">Online Attendance</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li ><a href="teacherDashboard.php">Teacher Dashboard</a></li>
            <li><a href="student.php">Student Dashboard</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  <div class="container">
    <marquee><h2>For Students</h2></marquee>
    
    <hr>
    <div class="homeSlider"> 
      <img src="img/logo.png">

    </div>
    
  </div>
     <!-- FOOTER -->
      <footer style="background:#3276B1; height:120%;text-align: center;color:#fff;margin-top: 75px;">
        Project Developed For Becholar Scince Of Computer Science & Engineering || Project 35th Day
        <p>Md Jewel Rana || M21512111027</p>
        <p>Supervised By <span>Dr A H M Saifullah Sadi</span></p>
      </footer>

    </div><!-- /.container -->

 </body>
</html>
