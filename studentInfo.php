
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


    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">

<style>
body {

    background: linear-gradient( #e9fbf9,#a8e594);


  /* background-color: #e9fbf9; */
}

form {
  padding-bottom: 20px;
}
.footer {

  color: #ffffff;

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
    <h1 class="text-center">But first, some info...</h1>
    <h6 class="text-muted text-center"> Your matches will only receive your name, email, & bio. </h6>
  </div>

<form method="post" action="bmQuestions.php">
  <div class="container" id="frm">
    <div class="form-group">
      <label for="Name">Name:</label>
      <input type="text" class="form-control" id="studentName" name="Name" aria-describedby="emailHelp" placeholder="Enter your first and last name" required>
    </div>
    <div class="form-group">
      <label for="L#">L#:</label>
      <input type="text" class="form-control" id="L#" name="L#" aria-describedby="emailHelp" placeholder="Enter L number" required>
    </div>

    <div class="form-group">
      <label for="Email">LU Email Address:</label>
      <input type="email" class="form-control" id="Email" name="Email" aria-describedby="emailHelp" placeholder="Enter email" required>
    </div>
     Gender: &nbsp;
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="Gender" value="Male" id="Gender" required>
      <label class="form-check-label" for="Gender">Male</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="Gender" value="Female" id="Gender" required>
      <label class="form-check-label" for="Gender">Female</label>
    </div>

    <div class="form-group">
      <label for="Bio">Short Bio:</label>
      <textarea class="form-control" id="Bio" name="Bio" placeholder="Give your matches a short bio! Or add social media handles to help them find you." rows="3"></textarea>
    </div>
    <div class="text-center">
    <button class="btn btn-primary" type="submit" name="submit" value="submit">Next</button>
  </div>
  </div>
</form>

</main>

    <footer class="footer bg-dark">
      <div class="container">
        <span>&copy;2018 LU student ACM chapter</span>
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
