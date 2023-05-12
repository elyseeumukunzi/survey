<?php
include "includes/connect.php";
session_start();
if (!isset($_SESSION['userid'])) {
  header('location:account.php');
}
//select user info

$selectuserinfo = $conn->prepare("SELECT * FROM users WHERE id = ?");
$selectuserinfo->execute(array($_SESSION['userid']));
$results = $selectuserinfo->fetchAll(PDO::FETCH_OBJ);
foreach ($results as $userinfo) {
  $userid = $userinfo->id;
}
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Eri rwanda</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              ERI-Rwanda
            </span>
          </a>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="s-1"> </span>
            <span class="s-2"> </span>
            <span class="s-3"> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Survey <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="account.php"> Account</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contactus">Contact Us</a>
                </li>
              </ul>
            </div>
            <div class="quote_btn-container ">
              <img src="images/avatar2.png" alt="" style="height:80px">
              <a href="">
                <span>
                  <?php echo $userinfo->companyname . " " . $userinfo->tin ; ?> <a
                    href="logout.php"> </a>
                </span>
              </a>
              <button class="btn btn-primary" id="logout">Logout</button>
              <script>
                document.getElementById("logout").addEventListener("click", logout);
                function logout() {
                  window.location = 'logout.php';
                }
              </script>
            </div>

          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section ">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail_box">
                    <h1>
                      Best Importer & Distributor
                    </h1>
                    <p>
                      25 years of exppperience in importing and distributing comodities
                    </p>
                    <div class="btn-box">
                      <a href="#contactus" class="btn-1">
                        Contact Us
                      </a>
                      <a href="#survey" class="btn-2">
                        Begin survey
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/eriwhite.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail_box">
                    <h1>
                      Customer survey
                    </h1>
                    <p>
                      This is to collect some information from our customers in order to increase our service quality
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Contact Us
                      </a>
                      <a href="#survey" class="btn-2">
                        Begin survey
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/eriwhite.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="carousel_btn-container">
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->

  <section class="about_section " id="survey">

    <div class="container">
      <div class="row">
        <?php
        if (isset($_GET['surveyid'])) {
          $id = $_GET['surveyid'];
          $selectquestions = "SELECT * FROM survey_set WHERE id = ?";
          $execute = $conn->prepare($selectquestions);
          $execute->execute(array($id));
          $results = $execute->fetchAll(PDO::FETCH_OBJ);
          foreach ($results as $row) {
            $tittle = $row->title;
          }
          ?>
          <h2>
            <?php echo $tittle; ?>
          </h2>
          <h5>
            <?php echo $row->description; ?>
          </h5>


          <div class="col-md-6">
            <div class="img-box">
              <img src="images/slider-img2.png" alt="answer the surey question">
            </div>
          </div>
          <div class="col-md-6">
            <?php
            $selectfirst = "SELECT order_by FROM questions WHERE survey_id = ? ORDER BY order_by ASC LIMIT 1";
            $execute = $conn->prepare($selectfirst);
            $execute->execute(array($id));
            $order = $execute->fetchAll(PDO::FETCH_OBJ);
            foreach ($order as $order) {
              $firstquestion = $order->order_by;
            }
            $selectlast = "SELECT order_by FROM questions WHERE survey_id = ? ORDER BY order_by DESC LIMIT 1";
            $execute = $conn->prepare($selectlast);
            $execute->execute(array($id));
            $last = $execute->fetchAll(PDO::FETCH_OBJ);
            foreach ($last as $last) {
              $lastquestion = $last->order_by;
            }
            $nextquestion = $_GET['qnumber'];
            $selectquestions = "SELECT * FROM questions WHERE survey_id = ? AND order_by = ? ORDER BY id DESC LIMIT 1";
            $execute = $conn->prepare($selectquestions);
            $execute->execute(array($id, $nextquestion));
            $questions = $execute->fetchAll(PDO::FETCH_OBJ);

            foreach ($questions as $question) {
              $questionnumber = $question->order_by;
              $options = $question->frm_option;
              $questionid=$question->id;
            }



            ?>
            <div class="detail-box">
              <div class="heading_container">
                <h1> <span class="badge" style="background-color:blue; font-size: 24; ">
                    <?php echo $nextquestion; ?>
                  </span></h1>

                <h2>

                  <?php echo $question->question; ?>


                </h2>
              </div>
              <p>
              <form id="" method="POST">
                <span class="text-danger" style="color:red;" id="error"></span>
                <?php
                // echo $option = $question->frm_option;               
                if ($question->type == 'radio_opt') {
                  foreach (json_decode($options) as $k => $v){
                    ?>
                    <div class="form-group">
                      <input type="radio" id="" name="answer[<?php echo $question->id; ?>] []"
                        value="<?php echo $k ?>" checked="">
                      <label for="option_<?php echo $k ?>"><?php echo $v ?></label>
                    </div>
                  <?php }; 
                } elseif ($question->type == 'check_opt') {
                  foreach (json_decode($options) as $k => $v){
                  ?>
                  <div class="form-group">
                                <input type="checkbox" id="" name="answer[<?php echo $question->id; ?>][]" value="<?php echo $k ?>" >
                                <label for="option_<?php echo $k ?>"><?php echo $v ?></label>
                             </div>
                             <?php

                }}
              elseif ($question->type == 'textfield_s') {
                ?>
                <textarea name="answer"  cols="30" rows="5" class="form-control" 
								placeholder="Write Something here..."></textarea>

                <?php

              }

                ?>


                </p>
                <?php if ($nextquestion == $lastquestion + 1) {
                  ?>
                  <a href="#" class="btn btn-primary" type="submit" id="continue">Submit survey</a>

                  <?php
                } else {

                  ?>
                  <button type="submit" class="btn btn-primary" name="continue">Continue</button>
                
                  
                <?php
               
               //save questions throught submit button 
               if(isset($_POST['continue']))
               {
                $userid=$_SESSION['userid'];
                if ($question->type == 'radio_opt') {
                  $answer=$_POST['answer'];
                  foreach($answer as $ans => $val){
                  $saveanswer=$conn->prepare("INSERT INTO answers(survey_id,user_id,answer,question_id) VALUE (?, ?, ?, ?)");
                  $saveanswer->execute(array($id,$userid,$val,$questionid));
                  }
                  if($saveanswer = 1)
                  {
                    $next=$nextquestion + 1;
                    echo "<script>window.location='index.php?surveyid=$id&qnumber=$next#survey'</script>";

                  }
                }
                elseif ($question->type == 'check_opt') {
                  $answer=$_POST['answer'];
                  foreach($answer as $ans => $value)
                  {
                    $textAnswer = "";
                    foreach ($value as $valkey => $anss) {
                      $textAnswer .= $anss;
                      if ($valkey != array_keys($value)[count($value) - 1]) {
                        $textAnswer .= ",";
                      }
                    }
                  $saveanswer=$conn->prepare("INSERT INTO answers (survey_id,user_id,answer,question_id) VALUE (?, ?, ?, ?)");
                  $saveanswer->execute(array($id,$userid,$textAnswer,$questionid));
                  }
                  if($saveanswer = 1)
                  {
                    $next=$nextquestion + 1;
                    echo "<script>window.location='index.php?surveyid=$id&qnumber=$next#survey'</script>";

                  }
                  
                }
                elseif ($question->type == 'textfield_s') {
                  $answer=$_POST['answer'];
                  $saveanswer=$conn->prepare("INSERT INTO answers (survey_id,user_id,answer,question_id) VALUE (?, ?, ?, ?)");
                  $saveanswer->execute(array($id,$userid,$answer,$questionid));                 
                  
                }
                if($saveanswer = 1)
                {
                  $next=$nextquestion + 1;
                  echo "<script>window.location='index.php?surveyid=$id&qnumber=$next#survey'</script>";

                }

                

                // echo "<script>window.alert('answered'); window.location='index.php'</script>";


               }
              }
               ?>
              </form>
            </div>
          </div>




          <?php

        } else {

          ?>
          <h2>PLease enter the survey link to start your survey</h2>


          <div class="col-md-6">
            <div class="img-box">
              <img src="images/survey.png" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  enter the survey link bellow
                </h2>
              </div>
              <p>
              <form id="searchlink">
                <span class="text-danger" style="color:red;" id="error"></span>
                <input type="text" class="form-control" id="link" placeholder="Link" required>

                </p>
                <button class="btn btn-primary" type="submit" id="continue">Continue </button>
                </a>
              </form>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>

  <!-- end about section -->


  <!-- service section -->

  <!-- end client section -->

  <div id="contactus" style="background:indigo">

    <!-- contact section -->
    <section class="contact_section layout_padding" id="contactLink">
      <div class="container">
        <div class="heading_container">
          <h2>
            Get In touch
          </h2>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-8 mx-auto">
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="inputName4" placeholder="Name ">
                </div>
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email id">
                </div>

              </div>
              <div class="form-row">
                <div class="form-group col">
                  <input type="text" class="form-control" id="inputSubject4" placeholder="Subject">
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="inputMessage" placeholder="Message">
              </div>
              <div class="d-flex justify-content-center">
                <button type="submit" class="">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


    <!-- end contact section -->



    <!-- info section -->
    <section class="info_section layout_padding2">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="info_logo">
              <h3>
                ERI-Rwanda
              </h3>
              <p>
                This survey and information collection platform was designed at the aim of correcting our customer's
                information and experience about our services<br>
                thus collecting what was wrong before the awareness.
              </p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_links">
              <h4>
                BASIC LINKS
              </h4>
              <ul class="  ">
                <li class=" active">
                  <a class="" href="index.html">Survey <span class="sr-only">(current)</span></a>
                </li>
                <li class="">
                  <a class="" href="about.html"> My Account</a>
                </li>
                <li class="">
                  <a class="" href="service.html">Contact us</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <h4>
                CONTACT DETAILS
              </h4>
              <a href="">
                <div class="img-box">
                  <img src="images/telephone-white.png" width="12px" alt="">
                </div>
                <p>
                  +250 789817969
                </p>
              </a>
              <a href="">
                <div class="img-box">
                  <img src="images/envelope-white.png" width="18px" alt="">
                </div>
                <p>
                  eri-rwanda@gmail.com
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-3">

            <div class="social_box">
              <a href="">
                <img src="images/info-fb.png" alt="">
              </a>
              <a href="">
                <img src="images/info-twitter.png" alt="">
              </a>
              <a href="">
                <img src="images/info-linkedin.png" alt="">
              </a>
              <a href="">
                <img src="images/info-youtube.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
  </div>
  </section>

  <!-- end info_section -->


  <!-- footer section -->
  <section class="container-fluid footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://eri-rwanda.com">ERI-Rwanda 2023</a>
      </p>
    </div>
  </section>
  <!-- footer section -->

  </div>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

  <script>
    document.getElementById("searchlink").addEventListener("submit", searchlink);
    function searchlink(e) {
      e.preventDefault();
      var link = document.getElementById('link').value;
      var xhr = new XMLHttpRequest();
      // console.log(xhr);
      xhr.open('GET', 'includes/helper.php?link=' + link + '&target=searchlink', true);

      xhr.onload = function () {
        if (this.status == 200) {
          var results = JSON.parse(this.responseText);
          if (results.value == 1) {
            window.location = 'index.php?surveyid=' + results.id + '&qnumber=1#survey';
          }
          else {
            document.getElementById('error').innerHTML = results.message;

          }
        }
        else if (this.status == 404) {
          error = "invalid survey link";
          document.getElementById('error').innerHTML = error;

        }

      }
      xhr.send();


    }
  </script>

</body>

</html>