
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

    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">

<style>
.frm{
  display: inline;
}
.hide{
  display:none;
}
</style>



</head>
<!-- <script> let i =0; </script> -->

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
   <!-- FIXME: add css instead of br-->
<br>
<form method="post" action="index.php">
  <div class="card mb-3">
    <div class="card-header" id="qNo"></div>
    <img class="rounded mx-auto d-block" src="images/cuteappa.png" style="width:400px; height:400px;" alt="Cute appa">

    <div class="card-body">
      <h5 class="card-title" id="qQ"></h5>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans1" name="quizAns" value="1" class="custom-control-input">
          <label class="custom-control-label" for="ans1" id="a1"></label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans2" name="quizAns" value="2" class="custom-control-input">
          <label class="custom-control-label" for="ans2" id="a2"></label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans3" name="quizAns" value="3" class="custom-control-input">
          <label class="custom-control-label" for="ans3" id="a3"></label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans4" name="quizAns" value="4" class="custom-control-input">
          <label class="custom-control-label" for="ans4" id="a4"></label>
        </div>
      </li>
    </ul>
    <div class="card-body text-center">
          <button type="button" class="btn btn-danger" onclick="backQ()">Back</button>
    <button type="button" class="btn btn-primary" onclick="nextQ()">Next</button>
    <button class="btn btn-primary text-center" type="submit" name="submit" value="submit">Submit</button>
    </div>
  </div>
</form>
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
    <script src="quizStuff.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>


<?php

 session_start();
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


$studentName = $_GET['Name'];
$studentLNo = $_GET['L#'];
$studentEmail = $_GET['Email'];
$studentGender = $_GET['Gender'];
$studentBio = $_GET['Bio'];
$ans1 = $_GET['quizAns'];

$query = "INSERT INTO LUStudent (Name, LNumber, EmailAddress, Gender, Bio, Ans1, Ans2, Ans3, Ans4, Ans5, Ans6, Ans7, Ans8, Ans9, Ans10)
VALUES ('$studentName', '$studentLNo', '$studentEmail', '$studentGender', '$studentBio', '$ans1','2','3','4','5','6','7','8','9','10')";

if($conn->query($query) === TRUE) {
  echo "Inserted student successfully";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 // mysql_query($query);

 // echo "Thanks for the info";

$conn->close();

//}
?>
