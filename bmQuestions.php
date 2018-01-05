
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

<!-- <script>


function nextQuestion(x){
let i = 0;
if(i < 9){
  i++;
}
console.log("question: "+ i);
}
</script> -->

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
   <!-- FIXME: add css instead of br-->
<br>


  <div class="card mb-3" id="0">
    <div class="card-header"> Question: 1/10 </div>
    <img class="rounded mx-auto d-block" src="images/cuteappa.png" style="width:400px; height:400px;" alt="Cute appa">

    <div class="card-body">
      <h5 class="card-title">Your friend is throwing a party at his house. You arrive:</h5>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans1" name="answer1" value="1" class="custom-control-input">
          <label class="custom-control-label" for="ans1">A full hour early. I'm helping him set up.</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans2" name="answer1" value="2" class="custom-control-input">
          <label class="custom-control-label" for="ans2">15 minutes early. I'm punctual.</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans3" name="answer1" value="3" class="custom-control-input">
          <label class="custom-control-label" for="ans3">15 minutes late. Who gets to a party on time anyways?</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans4" name="answer1" value="4" class="custom-control-input">
          <label class="custom-control-label" for="ans4">An hour late. I like making an entrance.</label>
        </div>
      </li>
    </ul>
    <div class="card-body text-center">
          <button type="button" onclick="previousQuestion()" class="btn btn-danger">Back</button>
    <button type="button" onclick="nextQuestion()" class="btn btn-primary">Next</button>
    </div>
  </div>


<!--
  <div class="card mb-3" id="1">
    <div class="card-header"> Question: 1/10 </div>
    <img class="rounded mx-auto d-block" src="images/cuteappa.png" style="width:400px; height:400px;" alt="Cute appa">

    <div class="card-body">
      <h5 class="card-title">Your friend is throwing a party at his house. You arrive:</h5>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="answer1" name="answer1" class="custom-control-input">
          <label class="custom-control-label" for="answer1">A full hour early. I'm helping him set up.</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="answer2" name="answer2" class="custom-control-input">
          <label class="custom-control-label" for="answer2">15 minutes early. I'm punctual.</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="answer3" name="answer3" class="custom-control-input">
          <label class="custom-control-label" for="answer3">15 minutes late. Who gets to a party on time anyways?</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="answer4" name="answer4" class="custom-control-input">
          <label class="custom-control-label" for="answer4">An hour late. I like making an entrance.</label>
        </div>
      </li>
    </ul>
    <div class="card-body text-center">
    <button type="button" onClick="Next()" class="btn btn-primary">Next</button>
    </div>
  </div> -->

<!-- </form> -->


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
          <script src="quizStuff.js" type="text/javascript"></script>

  </body>
</html>
