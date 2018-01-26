
<?php


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



// $query = "SELECT * FROM `administrator`";
$query = "INSERT INTO LUStudent (Name, LNumber, EmailAddress, Gender, Bio, Ans1, Ans2, Ans3, Ans4, Ans5, Ans6, Ans7, Ans8, Ans9, Ans10) VALUES ('$studentName', '$studentLNo', '$studentEmail', '$studentGender', '$studentBio', '$ans1','$ans2','$ans3','$ans4','$ans5','$ans6','$ans7','$ans8','$ans9','$ans10')";

$result = mysqli_query($conn, $query);

if($result){
  echo "Inserted student successfully";

}
else{
    echo "Error: <br>" . $conn->error;
}
 // mysql_query($query);

 // echo "Thanks for the info";

$conn->close();
?>


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
<p> Thanks for your submission!</p>

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
