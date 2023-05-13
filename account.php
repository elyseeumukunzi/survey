<?php
session_start();
include "includes/connect.php";
$selectuserinfo = $conn->prepare("SELECT * FROM users WHERE id = ?");
@$selectuserinfo->execute(array($_SESSION['userid']));
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

  <title>ERI-Rwanda</title>

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

<body class="sub_page">

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
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Survey </a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="account.php"> Account <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php#contactus">Contact Us</a>
                </li>
              </ul>
            </div>
            <?php
            if (!isset($_SESSION['userid'])) {
              ?>
              <div class="quote_btn-container ">
                <a href="">
                  <img src="images/call.png" alt="">
                  <span>
                    Call : +250 789817969
                  </span>
                </a>
              </div>

              <?php
            } else {
              ?>
              <div class="quote_btn-container ">
                <img src="images/avatar2.png" alt="" style="height:80px">

                <a href="">
                  <span>
                  <?php echo $userinfo->companyname . " " . $userinfo->tin ; ?> 
                </a>

                </span>
                <button class="btn btn-primary" id="logout">Logout</button>
                <script>
                  document.getElementById("logout").addEventListener("click", logout);
                  function logout() {
                    window.location = 'logout.php';
                  }
                </script>

              </div>
              <?php
            }
            ?>


          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- about section -->

  <section class="about_section" style="color:black">
    <div class="container">
      <div class="row">
        <div class="col-md-6">

          <div class="img-box">
            <img src="images/work-img2.png" alt="the surey system subscriber img">
          </div>



        </div>
        <div class="col-md-6">
          <section class="contact_section layout_padding" id="contactLink">
            <div class="container">
              <div class="heading_container">
                <h2 style="color:black">
                  Login
                </h2>
                <p style="color:black">You have to provide your account info before continue</p>
                <p style="color:red" id="error"></p>

              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto"
                  style="background-color:skyblue; border-radius:12px; height:300px; width:350PX">
                  <!-- <?php
                  // $selectinfo=$conn->prepare("SELECT * FROM users WHERE id = ?");
                  // $selectinfo->execute(array($userid));
                  // $result=$selectinfo->fetchAll(PDO::FETCH_OBJ);
                  // foreach($result as $user)
                  // {
                  //   $fname=$user->firstname;
                  
                  // }
                  
                  ?> -->
                  <form id="loginform">

                    <div class="form-row" style="margin-top:34px">
                      <div class="form-group col">
                        <input type="text" class="form-control" id="username" placeholder="email" required
                          value="<?php echo isset($userinfo->email) ? $userinfo->email : '' ?>">
                      </div>
                    </div>

                    <?php
                    if (!empty($userinfo->id)) {
                      ?>
                      <div class="form-group">
                        <input type="password" class="form-control" id="newpassword" placeholder="New password">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" id="comfirmpassword" placeholder="Comfirm password">
                      </div>
                      <div class="d-flex justify-content-center">

                        <button type="submit" class="">Update</button>

                        <?php
                    } else {
                      ?>
                       <div class="form-group">
                        <input type="password" class="form-control" id="password" placeholder="password">
                      </div>
                        <button type="submit" class="">Login</button>
                        <?php

                    }
                    ?>
                    </div>
                    <!-- <a href"#" type="button"><span>forgot password</span></a> -->
                  </form>
                </div>
              </div>
            </div>
          </section>


        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


  <div class="footer_bg">

    <!-- contact section -->


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
                <li>
                  <a class="" href="index.php">Survey <span class="sr-only">(current)</span></a>
                </li>
                <li class=" active">
                  <a class="" href="account.php"> My Account</a>
                </li>
                <li class="">
                  <a class="" href="index.php#contactus">Contact us</a>
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
                  info@eri-rwanda.com
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

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
  <script>
    document.getElementById("loginform").addEventListener("submit", loginForm);
    function loginForm(e) {
      e.preventDefault();
      var username = document.getElementById('username').value;
      var password = document.getElementById('password').value;
      var xhr = new XMLHttpRequest();
      // console.log(xhr);
      xhr.open('GET', 'includes/helper.php?username=' + username + '&password=' + password + '&target=login', true);
      xhr.onload = function () {
        console.log(this.status)
        if (this.status == 200) {
          var results = JSON.parse(this.responseText);
          document.getElementById('error').innerHTML = results.message;
          if (results.value == 1) {
            window.location = 'index.php';
            $sessionStorage.setItem("userid", results.id);
          }
        }
        else if (this.status == 404) {
          error = "can't connect to the api page";
          document.getElementById('error').innerHTML = error;


        }
      }
      xhr.send();


    }
  </script>


</body>

</html>