<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A fundrasing effort Lipscomb's ACM chapter">
    <meta name="author" content="Lipscomb University student ACM chapter">
    <link rel="icon" href="favicon.ico">

    <title>BisonMatch</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/global.css" rel="stylesheet">

    <!-- C ustom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <style>



    </style>
  </head>

  <body>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.php">BisonMatch</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="results.php">Results</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About BisonMatch</a>
            </li>
          </ul>

        </div>
      </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
      <div class="mt-3">
        <h1 class="text-center">Welcome to BisonMatch!</h1>
      </div>



      <div class="container">
        <h3 class="text-center">What is BisonMatch?</h3>
 &nbsp;Bison Match is a Valentine's Day matching service only available to Lipscomb students. It is hosted by Lipscomb's very own College of Computing and Technology as a project for members of our local chapter of ACM - the Association for Computing Machinery.
 It is designed to match you up with the perfect person to spend Valentine's Day with, and maybe even the rest of your life (this is Lipscomb after all)!
      </div>

      <div class="container">
        <h3 class="text-center">How does it work?</h3>
All you have to do is answer a few questions, then before Valentine's Day comes around you will be given the option of purchasing your results.
The proceeds from your purchase will go to raising funds for the ACM of Lipscomb University.
So take the test, donate $2.00, and find your date for Valentine's Day!
      </div>

      <div class="row">
        <div class="col-md">

          <div class="card text-center" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Fill out the quiz</h5>
        <p class="card-text">Answer ten questions put together by one of the psychology students here at Lipscomb.</p>
      </div>
    </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Purchase your results</h5>
      <p class="card-text">The proceeds from your purchase will go to raising funds for the ACM of Lipscomb University. </p>
    </div>
  </div>
</div>
<div class="col-md">
  <div class="card" style="width: 18rem;">
<div class="card-body">
<h5 class="card-title">Find your date for Valentines Day</h5>
<p class="card-text"> Blah blah</p>
</div>
</div>
</div>

      </div>

      <div class="container text-center">
        <p class="lead"> Ready to start? </p>
        <a href="studentInfo.php"><button type="button" class="btn btn-danger">Find me love</button></a>

      </div>

    </main>


    <footer class="footer">
      <div class="container">
        <span class="text-muted">&copy;2018 Lipscomb University's student ACM chapter</span>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


<?php

 // session_start();
// mysql_connect('localhost', 'mpreyes', '') or die (mysql_error());
// mysql_select_database('BisonMatch') or die (mysql_error());
// if($_POST['submit']){
$servername = "localhost";
$username = "bisonConnect";
$password = "bison1";
$databasename = "BisonMatch";

$conn = new mysqli($servername, $username, $password,$databasename);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$studentName = $_POST['Name'];
$studentLNo = $_POST['L#'];
$studentEmail = $_POST['Email'];
$studentGender = $_POST['Gender'];
$studentBio = $_POST['Bio'];
$ans1 = $_POST['answer1'];
$ans2 = $_POST['answer2'];
$ans3 = $_POST['answer3'];
$ans4 = $_POST['answer4'];
$ans5 = $_POST['answer5'];
$ans6 = $_POST['answer6'];
$ans7 = $_POST['answer7'];
$ans8 = $_POST['answer8'];
$ans9 = $_POST['answer9'];
$ans10 = $_POST['answer10'];


$query = "INSERT INTO LUStudent (Name, LNumber, EmailAddress, Gender, Bio, Ans1, Ans2, Ans3, Ans4, Ans5, Ans6, Ans7, Ans8, Ans9, Ans10)
VALUES ('$studentName', '$studentLNo', '$studentEmail', '$studentGender', '$studentBio', '$ans1','$ans2','$ans3','$ans4','$ans5','$ans6','$ans7','$ans8','$ans9','$ans10')";

if($conn->query($query) === TRUE) {
  echo "Inserted student successfully";
  echo $ans1;
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 // mysql_query($query);

 // echo "Thanks for the info";

$conn->close();

//}
?>
