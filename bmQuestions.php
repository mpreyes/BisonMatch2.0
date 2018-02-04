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
    <img class="card-img-top" src="images/date.gif" style=" height:600px;" alt="Cute appa">

    <div class="card-body">
      <h5 class="card-title" id="qQ">You’re on a first date. Everything is going fine, except that _________, which is really bothersome.</h5>
    </div>
    <ul class="list-group list-group-flush">

      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans11" name="answer1" value="1" class="custom-control-input" checked>
          <label class="custom-control-label" for="ans11">They showed up 20 minutes late.</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans12" name="answer1" value="2" class="custom-control-input">
          <label class="custom-control-label" for="ans12">They are a little too flirty.</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans13" name="answer1" value="3" class="custom-control-input">
          <label class="custom-control-label" for="ans13">They are obviously nervous and don’t know what to talk about.</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans14" name="answer1" value="4" class="custom-control-input">
          <label class="custom-control-label" for="ans14">They ask you how many kids you’d want someday.</label>
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
    <img class="card-img-top" src="images/nobodygottimeforthat.gif" style=" height:600px;" alt="Cute appa">

    <div class="card-body">
      <h5 class="card-title" id="qQ">The newest iPhone just came out. You:</h5>
    </div>
    <ul class="list-group list-group-flush">

      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans21" name="answer2" value="1" class="custom-control-input" checked>
          <label class="custom-control-label" for="ans21" id="a1">Buy it as soon as it drops. Money isn’t everything and I love having the newest technology!</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans22" name="answer2" value="2" class="custom-control-input">
          <label class="custom-control-label" for="ans22" id="a2">Wait a couple of months for it, that way I can get it at a cheaper price.</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans23" name="answer2" value="3" class="custom-control-input">
          <label class="custom-control-label" for="ans23" id="a3">I’ll get it when the next one comes out. That’s when the price for this one is at its prime.</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans24" name="answer2" value="4" class="custom-control-input">
          <label class="custom-control-label" for="ans24" id="a4">I still have my iphone 5, why would I spend a penny on a new one if this one still works?</label>
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
      <img class="card-img-top" src="images/date.gif" style=" height:600px;" alt="Cute appa">

    <div class="card-body">
      <h5 class="card-title" id="qQ">Do you have a secret hunch about how you will die? </h5>
    </div>
    <ul class="list-group list-group-flush">

      <li class="list-group-item" id="field1">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans31" name="answer3" value="1" class="custom-control-input" checked>
          <label class="custom-control-label" for="ans31" id="a1">In the arms of the person I love. I won’t let go, Jack.</label>
        </div>
      </li>
      <li class="list-group-item" id="field2">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans32" name="answer3" value="2" class="custom-control-input">
          <label class="custom-control-label" for="ans32" id="a2">In my sleep at the ripe old age of 93. Nice and easy!</label>
        </div>
      </li>
      <li class="list-group-item" id="field3">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans33" name="answer3" value="3" class="custom-control-input">
          <label class="custom-control-label" for="ans33" id="a3">From a terrible pandemic. Ebola is real, and I’m probably next.</label>
        </div>
      </li>
      <li class="list-group-item" id="field4">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans34" name="answer3" value="4" class="custom-control-input">
          <label class="custom-control-label" for="ans34" id="a4">Tripping on the curb into oncoming traffic. Once a clutz, always a clutz.</label>
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
  <img class="card-img-top" src="images/date.gif" style=" height:600px;" alt="Cute appa">

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
          <label class="custom-control-label" for="ans42" id="a2">Something intellectual. “The unexamined life is not worth living” – Socrates</label>
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
  <img class="card-img-top" src="images/date.gif" style=" height:600px;" alt="Cute appa">

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
  <img class="card-img-top" src="images/date.gif" style=" height:600px;" alt="Cute appa">

    <div class="card-body">
      <h5 class="card-title" id="qQ">If you could wake up tomorrow having gained any one quality or ability, what would it be?</h5>
    </div>
    <ul class="list-group list-group-flush">

      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans61" name="answer6" value="1" class="custom-control-input" checked>
          <label class="custom-control-label" for="ans61" id="a1">Oooh, flying!</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans62" name="answer6" value="2" class="custom-control-input">
          <label class="custom-control-label" for="ans62" id="a2">Telekinesis. Move things with my mind? Duh. That’s cool.</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans63" name="answer6" value="3" class="custom-control-input">
          <label class="custom-control-label" for="ans63" id="a3">Get all of my chapel credits without ever going to chapel.</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans64" name="answer6" value="4" class="custom-control-input">
          <label class="custom-control-label" for="ans64" id="a4">I’d speak and understand any language. Think of the possibilities!</label>
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
  <img class="card-img-top" src="images/date.gif" style=" height:600px;" alt="Cute appa">

    <div class="card-body">
      <h5 class="card-title" id="qQ">If you could be famous, what would you most like to be famous for?</h5>
    </div>
    <ul class="list-group list-group-flush">

      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans71" name="answer7" value="1" class="custom-control-input" checked>
          <label class="custom-control-label" for="ans71" id="a1">Being a performer! My life is a stage. Music, acting, you name it, I’d love to share my gift with the world!</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans72" name="answer7" value="2" class="custom-control-input">
          <label class="custom-control-label" for="ans72" id="a2">Something Intellectual. Could you imagine if I was the next Jonas Salk? Marie Curie?</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans73" name="answer7" value="3" class="custom-control-input">
          <label class="custom-control-label" for="ans73" id="a3">Reality TV! No shame. Kim Kardashian is my spirit animal.</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans74" name="answer7" value="4" class="custom-control-input">
          <label class="custom-control-label" for="ans74" id="a4">I’d be a professional athlete, for sure. I can already see my name in the hall of fame, and boy does it look good!</label>
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
  <img class="card-img-top" src="images/date.gif" style=" height:600px;" alt="Cute appa">

    <div class="card-body">
      <h5 class="card-title" id="qQ">What do you value most in a friendship?</h5>
    </div>
    <ul class="list-group list-group-flush">

      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans81" name="answer8" value="1" class="custom-control-input" checked>
          <label class="custom-control-label" for="ans81" id="a1">Loyalty. Ride or die baby!</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans82" name="answer8" value="2" class="custom-control-input">
          <label class="custom-control-label" for="ans82" id="a2">Common interests, for sure!</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans83" name="answer8" value="3" class="custom-control-input">
          <label class="custom-control-label" for="ans83" id="a3">The ability to laugh and be goofy about anything.</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans84" name="answer8" value="4" class="custom-control-input">
          <label class="custom-control-label" for="ans84" id="a4">Meme-tagging. It’s not true friendship unless I wake up to at least 10!</label>
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
  <img class="card-img-top" src="images/date.gif" style=" height:600px;" alt="Cute appa">

    <div class="card-body">
      <h5 class="card-title" id="qQ">When it comes to scary movies: </h5>
    </div>
    <ul class="list-group list-group-flush">

      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans91" name="answer9" value="1" class="custom-control-input" checked>
          <label class="custom-control-label" for="ans91">I love them! I can’t wait for SAW 23 to come out.</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans92" name="answer9" value="2" class="custom-control-input">
          <label class="custom-control-label" for="ans92">Um, no. I’d never sleep again!</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans93" name="answer9" value="3" class="custom-control-input">
          <label class="custom-control-label" for="ans93" >I’ll watch them if I have someone to snuggle with ;)</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans94" name="answer9" value="4" class="custom-control-input">
          <label class="custom-control-label" for="ans94">I’d rather watch something else. Can you say “predictable”?</label>
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
  <img class="card-img-top" src="images/date.gif" style=" height:600px;" alt="Cute appa">
  
    <div class="card-body">
      <h5 class="card-title" id="qQ"> What would you do if you won $10,000?</h5>
    </div>
    <ul class="list-group list-group-flush">

      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans1" name="answer10" value="1" class="custom-control-input" checked>
          <label class="custom-control-label" for="ans1">Run away to a Greek island with my best friend and forget about my problems.</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans2" name="answer10" value="2" class="custom-control-input">
          <label class="custom-control-label" for="ans2">Live a comfortable life knowing that I won’t have to worry about paying rent for a while! It’s the little things, ya know?</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans3" name="answer10" value="3" class="custom-control-input">
          <label class="custom-control-label" for="ans3">How many puppies will this buy me?</label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="custom-control custom-radio">
          <input type="radio" id="ans4" name="answer10" value="4" class="custom-control-input">
          <label class="custom-control-label" for="ans4">Invest it in an account with compound interest so that I can be a baller in my retirement.</label>
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
