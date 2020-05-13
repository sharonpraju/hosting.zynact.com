<?php
        session_start();
        if(isset($_SESSION['user']))
        {
          header("Location: dashboard.php");
          exit;
        }

        if(isset($_GET['plan']) && !empty($_GET['plan']))
        {
            $_SESSION['plan_selected']=$_GET['plan'];
        }
        else
        {
            header("Location: select_plan.php");
            exit;
        }
        
 ?>
 <!DOCTYPE html>
 <html lang="en">
 
 <head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="apple-touch-icon" sizes="76x76" href="https://sharonpraju.github.io/Zynact/assests/img/apple-icon.png">
   <link rel="icon" type="image/png" href="https://sharonpraju.github.io/Zynact/assests/img/zynact_fav_1.png">
   <title>
    Zynact : Free Web Hosting | Digital Solutions
   </title>
   <!--     Fonts and icons     -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
   <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
   <!-- Nucleo Icons -->
   <link href="https://sharonpraju.github.io/Zynact/assests/css/nucleo-icons.css" rel="stylesheet" />
   <!-- CSS Files -->
   <link href="https://sharonpraju.github.io/Zynact/assests/css/blk-design-system.css?v=1.0.0" rel="stylesheet" />
   <script>
    var check = function() {
        if (document.getElementById('password').value == document.getElementById('confirm_password').value) {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').textContent = '';
        document.getElementById('submit_btn').disabled = false;
        }
        else
        {
            if(document.getElementById('confirm_password').value!='')
            {
            document.getElementById('message').style.color = 'Orange';
            document.getElementById('message').textContent = 'Password Not Matching';
            document.getElementById('submit_btn').disabled = true;
            }
        }
    }
    </script>

    <style>
      @media (max-width:480px)  {
      #message{
        margin-left:10px;
        display: block;
      }
    }
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-165588900-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-165588900-1');
  </script>
 </head>
 
 <body class="register-page">
   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="100">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="https://zynact.com/index.html">
          <span>Zynact</span>
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a>
                Zynact
              </a>
            </div>
            <div class="col-6 collapse-close text-right">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="btn btn-link text-white" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-link text-white" href="https://zynact.com/contact.html">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-link" onclick="window.location.href ='support.php'">Support</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-link" onclick="window.location.href ='faq.php'">FAQ</a>
          </li>
          <br>
          <li class="nav-item">
            <a class="btn btn-simple btn-success" onclick="window.location.href ='index.php'">Free Web Hosting</a>
          </li>
          <br>
          <?php
          if(isset($_SESSION["user"]) && !empty($_SESSION["user"]))
          {
              $user=$_SESSION['user'];
              
              echo'<li class="nav-item" id="btn_log_out">
              <a class="btn btn-simple btn-success"  href="logout.php">
                <i class="tim-icons icon-single-02"></i> Log Out&nbsp;&nbsp;
              </a>
            </li>';
          }
          else
          {
              echo'<li class="nav-item" id="btn_sign_in">
              <a class="btn btn-simple btn-success" href="login.php">
                <i class="tim-icons icon-single-02"></i> Sign In&nbsp;&nbsp;
              </a>
            </li>';
          }
          ?>
          
        </ul>
      </div>
    </div>
  </nav>
   <!-- End Navbar -->
   <div class="wrapper">
     <div class="page-header">
       <div class="page-header-image"></div>
       <div class="content">
         <div class="container">
           <div class="row">
             <div class="col-lg-5 col-md-6 offset-lg-0 offset-md-3">
               <div id="square7" class="square square-7"></div>
               <div id="square8" class="square square-8"></div>
               <div class="card card-register div_reg_card">
                 <div class="card-header">
                   <img class="card-img" src="https://sharonpraju.github.io/Zynact/assests/img/square1.png" alt="Card image">
                   <h4 class="card-title">Sign Up</h4>
                 </div>
                 <div class="card-body">
                   <form class="form" action="create_account.php" method="post">
                     <div class="input-group" style="margin-top:-25px;">
                       <div class="input-group-prepend">
                         <div class="input-group-text">
                           <i class="tim-icons icon-single-02"></i>
                         </div>
                       </div>
                       <input type="text" class="form-control" name="name" placeholder="Full Name" required autocomplete="off">
                     </div>
                     <div class="input-group">
                       <div class="input-group-prepend">
                         <div class="input-group-text">
                           <i class="tim-icons icon-send"></i>
                         </div>
                       </div>
                       <input type="email" class="form-control" name="email" placeholder="Email Address" required autocomplete="off">
                     </div>
                     <div class="input-group">
                       <div class="input-group-prepend">
                         <div class="input-group-text">
                           <i class="tim-icons icon-lock-circle"></i>
                         </div>
                       </div>
                       <input type="password" class="form-control" id="password" placeholder="Password" name="password" onkeyup='check();' pattern=".{8,20}" title="Atleast 8 and Maximum 20 characters are allowed" required autocomplete="off">
                       <br>
                    </div>
                    <div class="input-group">
                       <div class="input-group-prepend">
                         <div class="input-group-text">
                           <i class="tim-icons icon-lock-circle"></i>
                         </div>
                       </div>
                       <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" name="confirm_password" onkeyup='check();' required autocomplete="off">
                       <br>
                    </div>
                    <div class="input-group">
                       <div class="input-group-prepend">
                         <div class="input-group-text">
                           <i class="tim-icons icon-lock-circle"></i>
                         </div>
                       </div>
                       <input type="text" class="form-control" placeholder="Promo Code (Optional)" name="promo_code" autocomplete="off">
                       <br>
                    </div>
                    <div class="form-check text-left">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" required>
                        <span class="form-check-sign"></span>
                        I agree to the
                        <a href="terms.php">terms and conditions</a>.
                      </label>
                    </div>
                    <br>
                    <input type="submit" id="submit_btn" value="Create Account" class="btn btn-info btn-round btn-lg">
                    &nbsp; &nbsp; &nbsp; &nbsp;<span id="message"></span>
                   </form>
                   <center><a href="login.php">Do you have an account? Goto login</a></center>
                 </div>
               </div>
             </div>
             <div class="reg_div">
             <h3>Already Have An Account?</h3><br>
             <a class="btn btn-simple btn-success reg_btn" href="login.php">Login Here</a>
            </div>
           </div>
           <div class="register-bg" style="z-index: -999;"></div>
           <div id="square1" class="square square-1" style="z-index: -999;"></div>
           <div id="square2" class="square square-2" style="z-index: -999;"></div>
           <div id="square3" class="square square-3" style="z-index: -999;"></div>
           <div id="square4" class="square square-4" style="z-index: -999;"></div>
           <div id="square5" class="square square-5" style="z-index: -999;"></div>
           <div id="square6" class="square square-6" style="z-index: -999;"></div>
         </div>
       </div>
     </div>
     <?php include 'ad.html'; ?>
     <br><br>
     <?php include 'ad.html'; ?>
     <br><br>
     <footer class="footer"  style="margin-bottom: -70px;">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <h1 class="title"><img class="img_footer" src="https://sharonpraju.github.io/Zynact/assests/img/zynact_logo.png" style="width: 150px;"></h1>
              <a href="https://www.gogetssl.com" style="margin-left: 20px;"><img src="https://www.gogetssl.com/skin/i/ggssl-site-seal-v1-dark.png" /></a>
            </div>
            <div class="col-md-3">
              <ul class="nav">
                <li class="nav-item">
                  <a href="https://zynact.com/index.html" class="nav-link">
                    Home
                  </a>
                </li>
                <li class="nav-item">
                  <a href="terms.php" class="nav-link">
                    Terms and Conditions
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-3">
              <ul class="nav">
                <li class="nav-item">
                  <a href="https://zynact.com/contact.html" class="nav-link">
                    Contact Us
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php" class="nav-link">
                    Free web hosting
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-3">
              <h3 class="title div_2">Follow us:</h3>
              <div class="btn-wrapper profile">
                <a href="" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us">
                  <i class="fab fa-twitter"></i>
                </a>
                <a target="_blank" href="https://www.facebook.com/zynact/" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Like us">
                  <i class="fab fa-facebook-square"></i>
                </a>
                <a href="" class="btn btn-icon btn-neutral  btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us">
                  <i class="fab fa-dribbble"></i>
                </a>
              </div>
              <br>
              <b>Crafted With <i class="tim-icons icon-heart-2"></i> From Zynact</b>
            </div>
          </div>
        </div>
      </footer>
   </div>
   <!--   Core JS Files   -->
   <script src="https://sharonpraju.github.io/Zynact/assests/js/core/jquery.min.js" type="text/javascript"></script>
   <script src="https://sharonpraju.github.io/Zynact/assests/js/core/popper.min.js" type="text/javascript"></script>
   <script src="https://sharonpraju.github.io/Zynact/assests/js/core/bootstrap.min.js" type="text/javascript"></script>
   <script src="https://sharonpraju.github.io/Zynact/assests/js/plugins/perfect-scrollbar.jquery.min.js"></script>
   <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
   <script src="https://sharonpraju.github.io/Zynact/assests/js/plugins/bootstrap-switch.js"></script>
   <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
   <script src="https://sharonpraju.github.io/Zynact/assests/js/plugins/nouislider.min.js" type="text/javascript"></script>
   <!-- Chart JS -->
   <script src="https://sharonpraju.github.io/Zynact/assests/js/plugins/chartjs.min.js"></script>
   <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
   <script src="https://sharonpraju.github.io/Zynact/assests/js/plugins/moment.min.js"></script>
   <script src="https://sharonpraju.github.io/Zynact/assests/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
   <!-- Black Dashboard DEMO methods, don't include it in your project! -->
   
   <!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
   <script src="https://sharonpraju.github.io/Zynact/assests/js/blk-design-system.min.js?v=1.0.0" type="text/javascript"></script>
   
  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/5e9ccb5469e9320caac54d95/default';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->
  
 </body>
 
 </html>
 




 <!--
=========================================================
* BLK Design System- v1.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/blk-design-system
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 -->