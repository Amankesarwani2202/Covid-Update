<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <?php include "links.php" ?>
    <?php include "style.php" ?>
</head>
<body onload="fetch()">
<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="#">HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">SYMPTOMS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">PREVENTION</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactusid">CONTACT</a>
      </li>
    </ul>
  </div>
</nav>

<div class="main_header"> 
    <div class="row w-100 h-100">
        <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
            <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                <img src="images/eksath.png" width="300" height="300">
            </div>
        </div>

        <div class="col-lg-7 col-md-5 col-12 order-lg-2 order-1">
            <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
                <h1>Let's Stay Safe & Fight Together Against Cor<span class="corona_rot"><img src="images/corona.png"></span>na Virus.</h1>
            </div>
        </div>
    </div>
</div>

<!-- ***********CORONA LATEST UPDATES********************** -->

<section class="corona_update container-fluid">
    <div class="mb-3">
        <h3 class="text-center">COVID-19 UPDATES</h3>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered table-striped text-center" id="tbval">
        <tr>
          <th>Country</th>
          <th>TotalConfirmed</th>
          <th>TotalRecovered</th>
          <th>TotalDeaths</th>
          <th>NewConfirmed</th>
          <th>NewRecovered</th>
          <th>NewDeaths</th>
        </tr>
      </table>
    </div>

<!-- **************ABOUTSECTION******************  -->

<div class="container-fluid sub_section pt-5 pb-5 " id="aboutid">
  <div class="text-center mb-5 mt-4">
    <h1>ABOUT COVID19</h1>
  </div>
  <div class="row pt-5">
    <div class="col-lg-5 col-md-6 col-12 ml-5">
      <img src="images/aboutcorona.png" class="img-fluid">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <h2>What is COVID-19 (CORONA VIRUS) ???</h2>
      <p>COVID-19 is a respiratory infection caused by the virus SARS-CoV-2, which was recently discovered after an outbreak began in Wuhan, China, in December 2019. SARS-CoV-2 is a type of coronavirus, which is a large family of viruses that cause illnesses ranging from the common cold to more severe infections in humans.</p>
      <p>COVID-19 causes a variety of symptoms in people who are infected, and not all people infected with COVID-19 will have the same symptoms. Fever, dry cough, shortness of breath, fatigue, or body aches are some of the most common symptoms; however, some people have experienced headache, abdominal pain, diarrhea, and sore throat as well. Symptoms typically appear 2 to 14 days after exposure, although some patients may not develop symptoms until later.</p>
    </div>
  </div>
</div>


<!-- SYMPOMTS -->
<div class="container-fluid  pt-5 pb-5 " id="sympid">
  <div class="text-center mb-5 mt-4">
    <h1>CORONA VIRUS SYMPTOMS</h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
            <img src="images/cough.png" class="img-fluid" width="120" height="120">
            <figcaption>Cough</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
            <img src="images/runnynoise.png" class="img-fluid" width="120" height="120">
            <figcaption>Runny Noise</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
            <img src="images/fever.png" class="img-fluid" width="120" height="120">
            <figcaption>Fever</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
            <img src="images/sick.png" class="img-fluid" width="120" height="120">
            <figcaption>Cold</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
            <img src="images/week.png" class="img-fluid" width="120" height="120">
            <figcaption>Tiredness</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
            <img src="images/breath.png" class="img-fluid" width="120" height="120">
            <figcaption>Difficulty in breathing</figcaption>
        </figure>
      </div>

    </div>
  </div>
</div>


<!-- PREVEMTIONS -->
<div class="container-fluid sub_section pt-5 pb-5 " id="preventid">
  <div class="text-center mb-5 mt-4">
    <h1>6 STEPS PREVENTION AGAINST CORONA VIRUS </h1>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 mt-5">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
                <img src="images/wearmask.png" class="" width="90" height="110">
            </figure>
        </div>
        <div class="col-lg-8 col-md-8 col-12">
        <p>Wash your hands regularly for 20 secondsm with soaps and water or alcohol based hand rub</p>
        </div>
      </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
                <img src="images/acontact.png" class="img-fluid" width="90" height="90">
            </figure>
        </div>
        <div class="col-lg-8 col-md-8 col-12">
        <p>Wash your hands regularly for 20 secondsm with soaps and water or alcohol based hand rub</p>
        </div>
      </div>
    </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
                <img src="images/avoidcrowd.png" class="img-fluid" width="90" height="90">
            </figure>
        </div>
        <div class="col-lg-8 col-md-8 col-12">
        <p>Wash your hands regularly for 20 secondsm with soaps and water or alcohol based hand rub</p>
        </div>
      </div>
    </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
                <img src="images/eahome.png" class="img-fluid" width="90" height="90">
            </figure>
        </div>
        <div class="col-lg-8 col-md-8 col-12">
        <p>Wash your hands regularly for 20 secondsm with soaps and water or alcohol based hand rub</p>
        </div>
      </div>
   </div>


      <div class="col-lg-4 col-md-4 col-12 mt-5">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
                <img src="images/cadisinfect.png" class="img-fluid" width="90" height="90">
            </figure>
        </div>
        <div class="col-lg-8 col-md-8 col-12">
        <p>Wash your hands regularly for 20 secondsm with soaps and water or alcohol based hand rub</p>
        </div>
      </div>
    </div>


      <div class="col-lg-4 col-md-4 col-12 mt-5">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
                <img src="images/handwashh.png" class="img-fluid" width="90" height="90">
            </figure>
        </div>
        <div class="col-lg-8 col-md-8 col-12">
        <p>Wash your hands regularly for 20 secondsm with soaps and water or alcohol based hand rub</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- CONTACT US  -->

<div class="container-fluid  pt-5 pb-5 " id="contactusid">
  <div class="text-center mb-5 mt-4">
    <h1>CONTACT US ASAP </h1>
  </div>

  <div class="container">
    <div class="row">
        <div class="col-lg-8 offset-lg-2 col-12">
          <form action="" method="POST">
              <div class="form-group">
                <label >Name</label>
                <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required>
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="name@gmail.com" autocomplete="off" required>
              </div>
              <div class="form-group">
                <label >Mobile Number</label>
                <input type="number" class="form-control" name="mobile"  autocomplete="off" required>
              </div>

  <div class="form-group">
    <div class="custom-control custom-checkbox custom-control-inline">
      <input type="checkbox" class="custom-control-input" id="customCheck1" name="coronasym[]" value="Cold">
      <label class="custom-control-label" for="customCheck1">Cold</label>
    </div>

    <div class="custom-control custom-checkbox custom-control-inline">
      <input type="checkbox" class="custom-control-input" id="customCheck2" name="coronasym[]" value="Fever">
      <label class="custom-control-label" for="customCheck2">Fever</label>
    </div>

    <div class="custom-control custom-checkbox custom-control-inline">
      <input type="checkbox" class="custom-control-input" id="customCheck3" name="coronasym[]" value="Breath">
      <label class="custom-control-label" for="customCheck3">Breath</label>
    </div>

    <div class="custom-control custom-checkbox custom-control-inline">
      <input type="checkbox" class="custom-control-input" id="customCheck4" name="coronasym[]" value="Tired">
      <label class="custom-control-label" for="customCheck4">Tired</label>
    </div>


  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>


</form>
        </div>
    </div>
  </div>
</div>


<!-- TOP CURSOR -->

<div class="container scrolltop float-right pr-5">
  <i class="fa fa-arrow-up" onclick="topFunction()" id="mybtn"></i>
</div>

<!-- FOOTER -->

<footer class="mt-5">
  <div class="footer_style text-white text-center container-fluid">
    <p>Copyright by Aman </p>
  </div>
</footer>

<script type="text/javascript">



  mybutton= document.getElementById("mybtn");
  window.onscroll =  function() {scrollFunction()};
  function scrollFunction(){
    if(document.body.scollTop >100 || document.documentElement.scrollTop >100){
      mybutton.style.display = "block";
    }else{
      mybutton.style.display = "none"
    }
  }
  function topFunction(){
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }

  function fetch(){
    $.get("https://api.covid19api.com/summary",
      function (data) {
        console.log(data['Countries'].length);
        var tbval = document.getElementById('tbval');

        for(var i=1; i<(data['Countries'].length); i++){
          var x = tbval.insertRow(); 
          x.insertCell(0);
          
          tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
          tbval.rows[i].cells[0].style.background = '#7aa4a91';
          tbval.rows[i].cells[0].style.color = '#800080';

          x.insertCell(1);
          tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
          tbval.rows[i].cells[1].style.background = '#4bb7d8';

          x.insertCell(2);
          tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
          tbval.rows[i].cells[2].style.background = '#4bb7d8';

          x.insertCell(3);
          tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
          tbval.rows[i].cells[3].style.background = '#f36e23';

          x.insertCell(4);
          tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
          tbval.rows[i].cells[4].style.background = '#4bb7d8';

          x.insertCell(5);
          tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
          tbval.rows[i].cells[5].style.background = '#9cc850';

          x.insertCell(6);
          tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
          tbval.rows[i].cells[6].style.background = '#f36e23';


        }
      });
  }
</script>
</body>
</html>


<?php

  include 'dbcon.php';
  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $symp = $_POST['coronasym'];
    $message = $_POST['message'];

    $chk = "";

    foreach($symp as $chk1){
      $chk .= $chk1.",";
    }

    $insertquery = " INSERT INTO coronacase(username, email, mobile, symp, messag)
     values('$username','$email','$mobile','$chk','$message') ";

  
     $query = mysqli_query($con, $insertquery);

     if($con){
      echo "Success";
  }
    }

?>
