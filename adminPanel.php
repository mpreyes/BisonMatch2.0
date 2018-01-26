<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
//$username = "bisonConnect";
//$password = "bison1";
$username = "root";
$password = "toor";
$databasename = "BisonMatch";

$conn = new mysqli($servername, $username, $password,$databasename);
//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully!";

?>


<!DOCTYPE html>
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

      .col-md {
        padding-top: 20px;
        padding-bottom: 20px;
      }

      .bM {

        padding-top: 20px;
        padding-bottom: 20px;
      }



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
        <h1 class="text-center">Admin Panel</h1>
      </div>




      <div class="container">
      <div class="jumbotron">
      <div class="form-group input-lg">
      <label for="firstname">Search by Name, StudentID, or EmailAddress.</label>
      <form action="adminPanel.php" method="post">

      <input type="text" name="search" placeholder="search">
      <button type="submit" value="go" class="btn btn-default">Submit</button>
      </form>
      </div>

      </div>
      </div>

<div class="container">
  <div class="jumbotron">

<p>Student Information</p>
<?php

$output = '';
//Collect
if(isset($_POST['search']) && !empty($_POST['search'])){
  $search = $_POST['search'];
//  $search = preg_replace("#[^0-9a-z]#i","",$search);
  $query = mysqli_query($conn, "SELECT * FROM LUStudent WHERE  NAME LIKE '%$search%'  OR LNumber LIKE '%$search%' OR EmailAddress LIKE '%$search%'") or die("Could not search.");
  $count = mysqli_num_rows($query);

  if($count == 0){
    $output = 'Student not found.';
  }
  else{
    echo '<table class="table"> <thead class="thead-default"> <tr><th>Student ID</th><th> Name</th> <th> Email Address</th><th>Send Email </th> </tr></thead>  <tbody>';
    while($row = mysqli_fetch_assoc($query)){
      //$rowinfo = "Here are rows";
      $id = $row['LNumber'];
      $name = $row['Name'];
      $email = $row['EmailAddress'];
      $gender = $row['Gender'];

      //  echo "\n$rowinfo"
      $output .= '<tr><td>'
      .$id. '</td><td> '.$name. '</td><td>'.$email. '</td>
       <td><form action="sendEmail.php" method="post">
    <input type="submit" name="send_results" value="Send Results"/>
    <input type="hidden" name="email" value='.$email.'/>
    <input type="hidden" name="name" value='.$name.' />
    <input type="hidden" name="id" value='.$id.' />
    <input type="hidden" name="gender" value='.$gender.' />
     </form></td>';
    }

  }

echo $output;

}

mysqli_close($conn);

 ?>


</div>
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
