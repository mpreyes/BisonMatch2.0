
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
        <h1 class="text-center">Take the Loooove Quiz</h1>
      </div>



  <form>
  <div class="container studentInfo">
  <div class="form-group">
    <label for="studentName">Name:</label>
    <input type="text" class="form-control" id="studentName" aria-describedby="emailHelp" placeholder="Enter your first and last name" required>
  </div>
  <div class="form-group">
    <label for="studentLNumber">L#:</label>
    <input type="text" class="form-control" id="studentLNumber" aria-describedby="emailHelp" placeholder="Enter L number" required>
  </div>

  <div class="form-group">
    <label for="studentEmail">LU Email Address:</label>
    <input type="email" class="form-control" id="studentEmail" aria-describedby="emailHelp" placeholder="Enter email" required>
  </div>
   Gender: &nbsp;
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="studentMale" value="option1">
    <label class="form-check-label" for="studentMale">Male</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="studentFemale" value="option2">
    <label class="form-check-label" for="studentFemale">Female</label>
  </div>

  <div class="form-group">
   <label for="exampleFormControlTextarea1">Short Bio:</label>
   <textarea class="form-control" id="studentBio" placeholder="Give your matches a short bio! Or add social media handles to help them find you." rows="2"></textarea>
 </div>

  <button type="submit" id="submitBtn" onClick="submitForm()"class="btn btn-primary text-center">Submit</button>
</div>



  <div class="card mb-3 quizInfo">
  <img class="rounded mx-auto d-block" src="images/cuteappa.png" style="width:500px;" alt="Cute appa">

  <div class="card-body">
    <h5 class="card-title">Your friend is throwing a party at his house. You arrive:</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
      <div class="custom-control custom-radio">
  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio1">A full hour early. I'm helping him set up.</label>
</div>
    </li>
    <li class="list-group-item">
      <div class="custom-control custom-radio">
  <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio2">15 minutes early. I'm punctual.</label>
</div>
    </li>
    <li class="list-group-item">
      <div class="custom-control custom-radio">
  <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio3">15 minutes late. Who gets to a party on time anyways?</label>
</div>
    </li>
    <li class="list-group-item">
      <div class="custom-control custom-radio">
  <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio4">An hour late. I like making an entrance.</label>
</div>
    </li>

  </ul>
  <div class="card-body text-center">
    <a href="#" class="card-link"><button type="button" class="btn btn-primary">Next</button></a>
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
    <script src="js/bootstrap.min.js"></script>
    <script src="js/quizStuff.js"></script>
  </body>
</html>
