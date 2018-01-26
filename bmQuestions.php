
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
<br>
<form method="post" action="submit.php">

  <div class="card mb-3" id="q1">
    <div class="card-header" id="qNo">Question 1/10</div>
    <img class="rounded mx-auto d-block" src="images/cuteappa.png" style="width:400px; height:400px;" alt="Cute appa">

    <div class="card-body">
      <h5 class="card-title" id="qQ">Your friend is throwing a party at his house. You arrive:</h5>
    </div>
    <ul class="list-group list-group-flush">

      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans11" name="answer1" value="1" class="custom-control-input" checked>
          <label class="custom-control-label" for="ans11">A full hour early. I'm helping him set up.</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans12" name="answer1" value="2" class="custom-control-input">
          <label class="custom-control-label" for="ans12">15 minutes early. I'm punctual.</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans13" name="answer1" value="3" class="custom-control-input">
          <label class="custom-control-label" for="ans13">15 minutes late. Who gets to a party on time anyways?</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans14" name="answer1" value="4" class="custom-control-input">
          <label class="custom-control-label" for="ans14">An hour late. I like making an entrance.</label>
        </div>
      </li>
    </ul>
    <div class="card-body text-center">
          <a href="studentInfo.php"><button type="button" class="btn btn-danger">Back</button></a>
    <button type="button" class="btn btn-primary" onclick='document.getElementById("q1").style.display = "none";
    document.getElementById("q2").style.display = "block";'>Next</button>
        <!-- <button class="btn btn-primary text-center" type="submit" name="submit" value="submit">Next</button> -->
    </div>
  </div>

  <div class="card mb-3" id="q2">
    <div class="card-header" id="qNo">Question 2/10</div>
    <img class="rounded mx-auto d-block" src="images/cuteappa.png" style="width:400px; height:400px;" alt="Cute appa">

    <div class="card-body">
      <h5 class="card-title" id="qQ">If you could have dinner with any past president, dead or alive, who would it be?</h5>
    </div>
    <ul class="list-group list-group-flush">

      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans21" name="answer2" value="1" class="custom-control-input" checked>
          <label class="custom-control-label" for="ans21" id="a1">Abraham Lincoln (might need to be changed)</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans22" name="answer2" value="2" class="custom-control-input">
          <label class="custom-control-label" for="ans22" id="a2">Franklin D. Roosevelt</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans23" name="answer2" value="3" class="custom-control-input">
          <label class="custom-control-label" for="ans23" id="a3">Barack Obama</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans24" name="answer2" value="4" class="custom-control-input">
          <label class="custom-control-label" for="ans24" id="a4">Ronald Reagan</label>
        </div>
      </li>
    </ul>
    <div class="card-body text-center">
      <button type="button" class="btn btn-danger" onclick='document.getElementById("q1").style.display = "block";
      document.getElementById("q2").style.display = "none";'>Back</button>
<button type="button" class="btn btn-primary" onclick='document.getElementById("q2").style.display = "none";
document.getElementById("q3").style.display = "block";'>Next</button>
        <!-- <button class="btn btn-primary text-center" type="submit" name="submit" value="submit">Next</button> -->

    </div>
  </div>

  <div class="card mb-3" id="q3">
    <div class="card-header" id="qNo">Question 3/10</div>
    <img class="rounded mx-auto d-block" src="images/cuteappa.png" style="width:400px; height:400px;" alt="Cute appa">

    <div class="card-body">
      <h5 class="card-title" id="qQ">The new iphone 11 just came out. You:</h5>
    </div>
    <ul class="list-group list-group-flush">

      <li class="list-group-item" id="field1">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans31" name="answer3" value="1" class="custom-control-input" checked>
          <label class="custom-control-label" for="ans31" id="a1">Buy it as soon as it drops. (insert aside here)</label>
        </div>
      </li>
      <li class="list-group-item" id="field2">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans32" name="answer3" value="2" class="custom-control-input">
          <label class="custom-control-label" for="ans32" id="a2">Wait a couple of months for it. I'll get it at a cheaper price.</label>
        </div>
      </li>
      <li class="list-group-item" id="field3">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans33" name="answer3" value="3" class="custom-control-input">
          <label class="custom-control-label" for="ans33" id="a3">I’ll get it when the iphone 12 comes out. That’s when the price is at its prime.</label>
        </div>
      </li>
      <li class="list-group-item" id="field4">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans34" name="answer3" value="4" class="custom-control-input">
          <label class="custom-control-label" for="ans34" id="a4">I still have my iphone 4. I won’t spend a penny on a new one until mine breaks.</label>
        </div>
      </li>
    </ul>
    <div class="card-body text-center">
      <button type="button" class="btn btn-danger" onclick='document.getElementById("q2").style.display = "block";
      document.getElementById("q3").style.display = "none";'>Back</button>
<button type="button" class="btn btn-primary" onclick='document.getElementById("q3").style.display = "none";
document.getElementById("q4").style.display = "block";'>Next</button>
        <!-- <button class="btn btn-primary text-center" type="submit" name="submit" value="submit">Next</button> -->

    </div>
  </div>

  <div class="card mb-3" id="q4">
    <div class="card-header" id="qNo">Question 4/10</div>
    <img class="rounded mx-auto d-block" src="images/cuteappa.png" style="width:400px; height:400px;" alt="Cute appa">

    <div class="card-body">
      <h5 class="card-title" id="qQ">You’re hanging out at a coffee shop with a friend. You’re most likely to talk about:</h5>
    </div>
    <ul class="list-group list-group-flush">

      <li class="list-group-item" id="field1">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans41" name="answer4" value="1" class="custom-control-input" checked>
          <label class="custom-control-label" for="ans41" id="a1">Jesus. Heart-to-hearts or nothing!</label>
        </div>
      </li>
      <li class="list-group-item" id="field2">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans42" name="answer4" value="2" class="custom-control-input">
          <label class="custom-control-label" for="ans42" id="a2">Something intellectual. (maybe a better aside)</label>
        </div>
      </li>
      <li class="list-group-item" id="field3">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans43" name="answer4" value="3" class="custom-control-input">
          <label class="custom-control-label" for="ans43" id="a3">Hobbies/common interests. (OMG did you see what happened on the bachelor last night??)</label>
        </div>
      </li>
      <li class="list-group-item" id="field4">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans44" name="answer4" value="4" class="custom-control-input">
          <label class="custom-control-label" for="ans44" id="a4">Life issues/latest gossip.</label>
        </div>
      </li>
    </ul>
    <div class="card-body text-center">
      <button type="button" class="btn btn-danger" onclick='document.getElementById("q3").style.display = "block";
      document.getElementById("q4").style.display = "none";'>Back</button>
<button type="button" class="btn btn-primary" onclick='document.getElementById("q4").style.display = "none";
document.getElementById("q5").style.display = "block";'>Next</button>
        <!-- <button class="btn btn-primary text-center" type="submit" name="submit" value="submit">Next</button> -->

    </div>
  </div>


  <div class="card mb-3" id="q5">
    <div class="card-header" id="qNo">Question 5/10</div>
    <img class="rounded mx-auto d-block" src="images/cuteappa.png" style="width:400px; height:400px;" alt="Cute appa">

    <div class="card-body">
      <h5 class="card-title" id="qQ">On a typical Saturday, you’ll find me:</h5>
    </div>
    <ul class="list-group list-group-flush">

      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans51" name="answer5" value="1" class="custom-control-input" checked>
          <label class="custom-control-label" for="ans51" id="a1">Probably studying. That MCAT ain’t gonna pass itself.</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans52" name="answer5" value="2" class="custom-control-input">
          <label class="custom-control-label" for="ans52" id="a2">Any kind of physical activity. Hiking anyone?</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans53" name="answer5" value="3" class="custom-control-input">
          <label class="custom-control-label" for="ans53" id="a3">Playing video games or watching anime. Keeping up with the latest twitch streams!</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans54" name="answer5" value="4" class="custom-control-input">
          <label class="custom-control-label" for="ans54" id="a4">Anything related to music! This is Nashville, after all.</label>
        </div>
      </li>
    </ul>
    <div class="card-body text-center">
      <button type="button" class="btn btn-danger" onclick='document.getElementById("q4").style.display = "block";
      document.getElementById("q5").style.display = "none";'>Back</button>
<button type="button" class="btn btn-primary" onclick='document.getElementById("q5").style.display = "none";
document.getElementById("q6").style.display = "block";'>Next</button>
        <!-- <button class="btn btn-primary text-center" type="submit" name="submit" value="submit">Next</button> -->

    </div>
  </div>


  <div class="card mb-3" id="q6">
    <div class="card-header" id="qNo">Question 6/10</div>
    <img class="rounded mx-auto d-block" src="images/cuteappa.png" style="width:400px; height:400px;" alt="Cute appa">

    <div class="card-body">
      <h5 class="card-title" id="qQ">"Your friend is throwing a party at his house. You arrive:</h5>
    </div>
    <ul class="list-group list-group-flush">

      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans61" name="answer6" value="1" class="custom-control-input" checked>
          <label class="custom-control-label" for="ans61" id="a1">A full hour early. I'm helping him set up.</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans62" name="answer6" value="2" class="custom-control-input">
          <label class="custom-control-label" for="ans62" id="a2">15 minutes early. I'm punctual.</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans63" name="answer6" value="3" class="custom-control-input">
          <label class="custom-control-label" for="ans63" id="a3">15 minutes late. Who gets to a party on time anyways?</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans64" name="answer6" value="4" class="custom-control-input">
          <label class="custom-control-label" for="ans64" id="a4">An hour late. I like making an entrance.</label>
        </div>
      </li>
    </ul>
    <div class="card-body text-center">
      <button type="button" class="btn btn-danger" onclick='document.getElementById("q5").style.display = "block";
      document.getElementById("q6").style.display = "none";'>Back</button>
<button type="button" class="btn btn-primary" onclick='document.getElementById("q6").style.display = "none";
document.getElementById("q7").style.display = "block";'>Next</button>
        <!-- <button class="btn btn-primary text-center" type="submit" name="submit" value="submit">Next</button> -->

    </div>
  </div>


  <div class="card mb-3" id="q7">
    <div class="card-header" id="qNo">Question 7/10</div>
    <img class="rounded mx-auto d-block" src="images/cuteappa.png" style="width:400px; height:400px;" alt="Cute appa">

    <div class="card-body">
      <h5 class="card-title" id="qQ">"Your friend is throwing a party at his house. You arrive:</h5>
    </div>
    <ul class="list-group list-group-flush">

      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans71" name="answer7" value="1" class="custom-control-input" checked>
          <label class="custom-control-label" for="ans71" id="a1">A full hour early. I'm helping him set up.</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans72" name="answer7" value="2" class="custom-control-input">
          <label class="custom-control-label" for="ans72" id="a2">15 minutes early. I'm punctual.</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans73" name="answer7" value="3" class="custom-control-input">
          <label class="custom-control-label" for="ans73" id="a3">15 minutes late. Who gets to a party on time anyways?</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans74" name="answer7" value="4" class="custom-control-input">
          <label class="custom-control-label" for="ans74" id="a4">An hour late. I like making an entrance.</label>
        </div>
      </li>
    </ul>
    <div class="card-body text-center">
      <button type="button" class="btn btn-danger" onclick='document.getElementById("q6").style.display = "block";
      document.getElementById("q7").style.display = "none";'>Back</button>
<button type="button" class="btn btn-primary" onclick='document.getElementById("q7").style.display = "none";
document.getElementById("q8").style.display = "block";'>Next</button>
        <!-- <button class="btn btn-primary text-center" type="submit" name="submit" value="submit">Next</button> -->

    </div>
  </div>


  <div class="card mb-3" id="q8">
    <div class="card-header" id="qNo">Question 8/10</div>
    <img class="rounded mx-auto d-block" src="images/cuteappa.png" style="width:400px; height:400px;" alt="Cute appa">

    <div class="card-body">
      <h5 class="card-title" id="qQ">"Your friend is throwing a party at his house. You arrive:</h5>
    </div>
    <ul class="list-group list-group-flush">

      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans81" name="answer8" value="1" class="custom-control-input" checked>
          <label class="custom-control-label" for="ans81" id="a1">A full hour early. I'm helping him set up.</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans82" name="answer8" value="2" class="custom-control-input">
          <label class="custom-control-label" for="ans82" id="a2">15 minutes early. I'm punctual.</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans83" name="answer8" value="3" class="custom-control-input">
          <label class="custom-control-label" for="ans83" id="a3">15 minutes late. Who gets to a party on time anyways?</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans84" name="answer8" value="4" class="custom-control-input">
          <label class="custom-control-label" for="ans84" id="a4">An hour late. I like making an entrance.</label>
        </div>
      </li>
    </ul>
    <div class="card-body text-center">
      <button type="button" class="btn btn-danger" onclick='document.getElementById("q7").style.display = "block";
      document.getElementById("q8").style.display = "none";'>Back</button>
<button type="button" class="btn btn-primary" onclick='document.getElementById("q8").style.display = "none";
document.getElementById("q9").style.display = "block";'>Next</button>
        <!-- <button class="btn btn-primary text-center" type="submit" name="submit" value="submit">Next</button> -->

    </div>
  </div>


  <div class="card mb-3" id="q9">
    <div class="card-header" id="qNo">Question 9/10</div>
    <img class="rounded mx-auto d-block" src="images/cuteappa.png" style="width:400px; height:400px;" alt="Cute appa">

    <div class="card-body">
      <h5 class="card-title" id="qQ">"Your friend is throwing a party at his house. You arrive:</h5>
    </div>
    <ul class="list-group list-group-flush">

      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans91" name="answer9" value="1" class="custom-control-input" checked>
          <label class="custom-control-label" for="ans91">A full hour early. I'm helping him set up.</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans92" name="answer9" value="2" class="custom-control-input">
          <label class="custom-control-label" for="ans92">15 minutes early. I'm punctual.</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans93" name="answer9" value="3" class="custom-control-input">
          <label class="custom-control-label" for="ans93" >15 minutes late. Who gets to a party on time anyways?</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans94" name="answer9" value="4" class="custom-control-input">
          <label class="custom-control-label" for="ans94">An hour late. I like making an entrance.</label>
        </div>
      </li>
    </ul>
    <div class="card-body text-center">
      <button type="button" class="btn btn-danger" onclick='document.getElementById("q8").style.display = "block";
      document.getElementById("q9").style.display = "none";'>Back</button>
<button type="button" class="btn btn-primary" onclick='document.getElementById("q9").style.display = "none";
document.getElementById("q10").style.display = "block";'>Next</button>
        <!-- <button class="btn btn-primary text-center" type="submit" name="submit" value="submit">Next</button> -->

    </div>
  </div>


  <div class="card mb-3" id="q10">
    <div class="card-header" id="qNo">Question 10/10</div>
    <img class="rounded mx-auto d-block" src="images/cuteappa.png" style="width:400px; height:400px;" alt="Cute appa">

    <div class="card-body">
      <h5 class="card-title" id="qQ">"Your friend is throwing a party at his house. You arrive:</h5>
    </div>
    <ul class="list-group list-group-flush">

      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans1" name="answer10" value="1" class="custom-control-input" checked>
          <label class="custom-control-label" for="ans1">A full hour early. I'm helping him set up.</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans2" name="answer10" value="2" class="custom-control-input">
          <label class="custom-control-label" for="ans2">15 minutes early. I'm punctual.</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans3" name="answer10" value="3" class="custom-control-input">
          <label class="custom-control-label" for="ans3">15 minutes late. Who gets to a party on time anyways?</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans4" name="answer10" value="4" class="custom-control-input">
          <label class="custom-control-label" for="ans4">An hour late. I like making an entrance.</label>
        </div>
      </li>
    </ul>
    <div class="card-body text-center">
      <button type="button" class="btn btn-danger" onclick='document.getElementById("q9").style.display = "block";
      document.getElementById("q10").style.display = "none";'>Back</button>

      <button class="btn btn-primary text-center" type="submit" name="submit" value="submit">Submit</button>

    </div>
  </div>

  <?php
  echo '<input type="hidden" name="Name" value="'.$_POST['Name'].'">';
  echo '<input type="hidden" name="L#" value="'.$_POST['L#'].'">';
  echo '<input type="hidden" name="Email" value="'.$_POST['Email'].'">';
  echo '<input type="hidden" name="Gender" value="'.$_POST['Gender'].'">';
  echo '<input type="hidden" name="Bio" value="'.$_POST['Bio'].'">';
  ?>

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
    <!-- <script src="quizStuff.js"></script> -->
    <script src="bmQuizStuff.js"> </script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
